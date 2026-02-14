<?php
    //localhost, user and password all use the default MySQL values I believe
    $host = "localhost";
    $db = "Phase1";
    $user = "root";
    $password = "";

    //points to the database
    $dsn = "mysql:host=$host;dbname=$db";

    //try to connect
    try
    {
        $pdo = new PDO ($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //exception handling
    }
    catch(PDOException $e)
    {
        die("Database connection failed: " . $e->getMessage());
    }
