<?php

class Person {
    public $name = 'Bob';

    public $age = 20;

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$person = new Person();

$person->setName('Vasya');
echo $person->name;

$person->setAge(21);
echo $person->age;


echo $person->getAge();
echo $person->getName();