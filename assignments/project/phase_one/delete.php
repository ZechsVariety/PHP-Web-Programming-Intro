<?php
  require "includes/header.php";
  require "includes/connect.php";

  //check if an id is in the url (using get)
  if (!isset($_GET['id'])) {
    die("No post ID provided.");
  }
  $postID = $_GET['id']; //parse id from url

  // build query using placeholder variables to avoid tampering/data stealing stuff
  $sql = "DELETE from posts WHERE id = :id";

  // prepare the query (pdo comes from connect.php. stmt stands for statement)
  $stmt = $pdo->prepare($sql); //onec again idk why pdo is underlined

  // map the placeholder id variable to the id from the url
  $stmt->bindParam(':id', $postID);

  //execute query
  $stmt->execute();

  // refresh the page
  header("Location: blog.php");
