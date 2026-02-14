<?php
  require "includes/header.php";
  require "includes/connect.php";

  //get all the posts from the database

  //retrieve all the posts
  $sql = "SELECT * FROM posts ORDER BY postTime DESC";

  //prepare the statement
  $stmt = $pdo->prepare($sql);

  //execute the statement
  $stmt->execute();

  //fetch all the results and add it to the array $posts
  $posts = $stmt->fetchAll();
?>

<main>
  <h2>Posts</h2>

  <?php
    if (count($posts) == 0):
      echo "<p>No posts yet.</p>";
    else:
      foreach($posts as $post => $quantity) //=> $quanitity is for associative arrays like this because each value isn't indexed by a number but by a name instead
      {
        echo
        ("
          <div>
            <h3>" . $posts[$post][1] . "</h3>
            <p><small>Posted to " . $posts[$post][3] . " | " . $posts[$post][4] . "</small></p>
            <p>" . $posts[$post][2] . "</p>
            <a href=\"edit.php?id=" . $posts[$post][0] . "\">Edit</a>
          </div>"
        );
      }
    endif;
  ?>

  <p>
    <a href="index.php">Create a New Post</a>
  </p>
</main>
