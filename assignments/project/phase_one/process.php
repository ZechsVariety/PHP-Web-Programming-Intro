<?php
    require "includes/header.php";
    require "includes/connect.php";

    //parse and validate all fields
    require "includes/validateFields.php";

    //below only runs if there were no validation errors

    //to database
    
    // build query using placeholder variables to avoid tampering/data stealing stuff
    $sql = "INSERT INTO posts(title, content, mainTag) VALUES (:title, :content, :mainTag)";

    // prepare the query (pdo comes from connect.php. stmt stands for statement)
    $stmt = $pdo->prepare($sql);

    // map the placeholder variables to the form data
    $stmt->bindParam(':title',   $title);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':mainTag', $mainTag);

    //execute query
    $stmt->execute();

    //close connection (not required but its cool)
    $pdo = null;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Awesome Blog - Post Submission</title>

        <!-- bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>

    <body>
        <main>
            <h2>Posted.</h2>

            <?php
                echo "<h3>Your post \"<em>" . $title . "</em>\" has been posted to <em>" . $mainTag . "</em>!</h3>";
            ?>

            <p>
                <a href="blog.php" role="button" class="btn btn-secondary btn-sm mb-3">View Blog Posts</a>
            </p>
        </main>
    </body>
</html>
