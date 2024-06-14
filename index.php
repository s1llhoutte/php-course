<?php

class Person
{
    public $name = 'Bob';

    public $age = 20;

    public $jpb = 'Developer';

    public function __construct($name, $age, $jpb)
    {
        $this->name = $name;
        $this->age = $age;
        $this->jpb = $jpb;
    }

    public function sayHello() {
        echo 'say Hello';
    }

}

class Developer extends Person
{
    public function work()
    {
        echo 'Developer is working';
    }
}

class Director extends Person
{
    public function work()
    {
        echo 'director is working';
    }
}

class Manager extends Person
{
    public function work()
    {
        echo 'manager is working';
    }
}

$manager = new Manager('maria', 20, 'manager');
echo $manager->name;

$director = new Director('Arkadii', 42, 'director');
echo $director->jpb;