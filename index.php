<?php

abstract class Person
{
    public $name;
    public $age;
    public $jpb;

    public function __construct($name, $age, $jpb)
    {
        $this->name = $name;
        $this->age = $age;
        $this->jpb = $jpb;
    }
}

class Developer extends Person
{
    public $timePerWeek;

    public function __construct($name, $age, $jpb, $timePerWeek)
    {
        $this->timePerWeek = $timePerWeek;
        parent::__construct($name, $age, $jpb);
    }
}

$developer = new Developer('Victor', 20, 'developer', '10');
echo $developer->name;