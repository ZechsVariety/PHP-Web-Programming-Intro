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

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Awesome Blog - All Posts</title>

      <!-- bootstrap css -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>

  <body>
    <main style="text-align: center;">
      <p>
        <a href="index.php" role="button" class="btn btn-info btn-sm m-3">Create a New Post</a>
      </p>

      <div class="container bg-primary-subtle p-3">
        <h2 style="text-align: center;">Posts</h2>

        <?php
          if (count($posts) == 0):
            echo "<p>No posts yet.</p>";
          else:
            foreach($posts as $post => $quantity) //=> $quanitity is for associative arrays like this because each value isn't indexed by a number but by a name instead
            {
              /*
                h3 - POST TITLE
                small p - Posted to TAG | DATETIME
                p - CONTENT
                a - Edit - brings you to edit.php with whatever post id in the url (ex: edit.php?id=1)
                a - Delete - returns a confirm message that is built in to the browser, allowing you to continue or cancel (from lesson 4) ("Are you sure you want to delete POST TITLE?"). Then it redirects to delete.php?id=ID, which deletes the entry from the database and instantly redirects you to blog.php. it looks like the page just refreshes
              */
              //NOTE: \" is an escape character, allowing for " to be used
              echo
              ("
                <div class='container border mb-3 p-3 bg-body' style='text-align: center; width: 50%;'>
                  <h3>" . $posts[$post][1] . "</h3>
                  <p><small>Posted to " . $posts[$post][3] . " | " . $posts[$post][4] . "</small></p>
                  <p>" . $posts[$post][2] . "</p>
                  <a href='edit.php?id=" . $posts[$post][0] . "' role='button' class='btn btn-primary m-1'>Edit</a>
                  <a href='delete.php?id=" . $posts[$post][0] . "' role='button' class='btn btn-danger m-1' onclick=\"return confirm('Are you sure you want to delete " . $posts[$post][1] . "?');\">Delete</a>
                </div>
              ");
            }
          endif;
        ?>
      </div>
    </main>
  </body>
</html>
