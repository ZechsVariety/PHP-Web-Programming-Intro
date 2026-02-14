<?php
  require "includes/header.php";
  require "includes/connect.php";

  //check if an id is in the url (using get)
  if (!isset($_GET['id'])) {
    die("No post ID provided.");
  }
  $postID = $_GET['id']; //parse id from url

  //submit changes to the database
  if ($_SERVER['REQUEST_METHOD'] == 'POST') //runs only if you just submitted the form
  {
    //parse and validate all fields
    require "includes/validateFields.php";
    
    // build query using placeholder variables to avoid tampering/data stealing stuff
    $sql = "UPDATE posts
            SET title   = :title,
                content = :content,
                mainTag = :mainTag
            WHERE id = :id";

    // prepare the query (pdo comes from connect.php. stmt stands for statement)
    $stmt = $pdo->prepare($sql); //$pdo is underlined red but it actually works regardless

    // map the placeholder variables to the form data
    $stmt->bindParam(':title',   $title);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':mainTag', $mainTag);
    $stmt->bindParam(':id', $postID);

    //execute query
    $stmt->execute();

    //close connection (not required but its cool)
    $pdo = null;

    // redirect back to the block posts page (prevents unintentional form resubmission)
    header("Location: blog.php");
    exit;
  }

  //below only runs if you didn't just submit the form

  //retrieve the current entry based on its id
  $sql = "SELECT * FROM posts WHERE id = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':id', $postID);
  $stmt->execute();
  $pdo = null;

  //fetch the entry's data and put it in the $post array
  $post = $stmt->fetch();

  if (!$post) {
    die("Post not found.");
  }
?>

<main>
  <h3>Update Post #<?= $post['id']; ?></h3>

  <form method="post">
    <!-- each field is autofilled using the value property -->

    <label for="title">Post Title</label>
    <input type="text" id="title" name="title" maxlength="100" required value="<?= $post['title']; ?>">

    <label for="content">Content</label>
    <textarea id="content" name="content" maxlength="1000" required placeholder="Enter Text Here..."><?= $post['content']; ?></textarea>

    <label for="mainTag">Main Tag</label>
    <input type="text" id="mainTag" name="mainTag" maxlength="100" required placeholder="Ex: #art" value="<?= $post['mainTag']; ?>">

    <button type="submit">Save Changes</button>
    <a href="blog.php">Cancel</a> <!--cannot be button cause then it would submit-->
  </form>

  <a href="index.php">Create a New Post</a>
</main>
