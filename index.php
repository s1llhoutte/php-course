<?php

class Person
{
    public static $name;
    public static function sum($a, $b)
    {
        echo $a + $b;
    }
    public static function setName($name)
    {
        self::$name = $name;
    }
}

Person::setName('Anton');
echo Person::$name;

$person = new Person();
echo Person::$name;