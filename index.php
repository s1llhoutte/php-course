<?php

class Person
{
    public $name = 'Bob';

    public $age = 20;

    public $jpb = 'Developer';

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

$manager = new Manager();
$manager->sayHello();