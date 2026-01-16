<?php 
require "header.php"; 
echo "<p> Follow the instructions outlined in instructions.txt to complete this lab. Good luck & have fun!😀 </p>";
require "footer.php"; 

//require the car php file since it is used below
require "car.php";

$car = new Car("idk what make means", "Truck", "1847");
echo $car->getVariables();

require "connect.php";

/*
    I found making the constructor to be easy as it is very similar to C# and Java

    I found it difficult to create and connect to a database as I'm not really sure what each variable is used for, and I don't understand the PDO stuff. I also couldn't follow along with a portion of the lesson because MySQL was not working, and so I had to research how to create a database afterwards.
*/
