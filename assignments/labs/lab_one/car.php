<?php

class Car
{
    //modifiable variables
    public string $make;
    public string $model;
    public int $year;

    //constructor
    public function __construct(string $make, string $model, int $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    //return each variable value as a single string
    public function getVariables(): string
    {
        return "Make: {$this->make}, Model: {$this->model}, Year: {$this->year}";
    }
}
