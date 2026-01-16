<?php

//localhost, user and password all use the default MySQL values I believe
$host = "localhost"; //hostname
$db = "Lab1"; //database name. i made this Lab1 database here: http://localhost/phpmyadmin/
$user = "root"; //username
$password = ""; //password

//points to the database
$dsn = "mysql:host=$host;dbname=$db";

//try to connect. if connected, echo a happy message.
try
{
    $pdo = new PDO ($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //exception handling
    echo "<p>Connection Successful.</p>";
}
//if theres an error when trying to connect
catch(PDOException $e)
{
    die("Database connection failed: " . $e->getMessage());
}
