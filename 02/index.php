<?php
//make php strict for variable types. must be at very start of script.
declare(strict_types = 1);
require "connect.php";

// comment
/* multi line comment */

//variables (loosely typed)
$firstName = "Zech"; //string
$lastName = "Ferg";
$age = 18; //int
$isAwesome = true; //bool

echo "<p> Hello there, my name is " . $firstName . " " . $lastName . "</p>"; //concatnation uses dots instead of plusses

if($isAwesome)
{
    echo "<p>Yeah!</p>";
}
else
{
    echo "<p>damn</p>";
}

//loosely typed
$num1 = 1;
$num2 = "2"; //string, but in addition is treated as an int if strict types is off

//add type hints to make php less loose
/*
function add(int $num1, int $num2) : int
{
    return $num1 + $num2;
}

echo "<p>" . add($num1, $num2) . "</p>";
*/

//oop with php

class Person
{
    public string $name;
    public int $age;
    public bool $isAwesome;

    public function __construct(string $name, int $age, bool $isAwesome)
    {
        $this->name = $name;
        $this->age = $age;
        $this->isAwesome = $isAwesome;
    }

    public function getBadge(): string
    {
        $role = $this->isAwesome ? "Awesome" : "Not Awesome";
        return "Name : {$this->name} | Age: {$this->age} | Role : $role";
    }
}

$person = new Person("Jerma985", 40, true);

echo $person->getBadge();
