<?php

class Person {
    public $name = 'Bob';

    public $age = 20;

    public $hobby = 'swimming';

    public $isMarried = false;

    public function __construct($name, $age, $hobby)
    {
        echo 'CONSTRUCTOR';
        $this->name = $name;
        $this->age = $age;
        $this->hobby = $hobby;
    }

}

$person = new Person('Victor', 21, 'swimming');
echo $person->name;