<?php
declare(strict_types = 1);

$host = "localhost"; //hostname
$db = "week_two"; //database name
$user = "root"; //username
$password = ""; //password

//points to the database
$dsn = "mysql:host=$host;dbname=$db";

//try to connect. if connected, echo a happy message.
try
{
    $pdo = new PDO ($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //exception handling
    echo "<p>YAY CONNECTED!</p>";
}
//if theres an error when trying to connect
catch(PDOException $e)
{
    die("Database connection failed: " . $e->getMessage());
}
