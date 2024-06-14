<?php

class Person {
    public $name = 'Victor';

    public $age = 20;

    public $isMarried = true;

    public function sayHello () {
        echo 'Hello my friend\'s';
    }
}

$person = new Person();
$person->sayHello();