<?php
$person = [
    'name' => 'Victor',
    'age' => 20,
    'hobby' => 'swimming',
    'is_married' => true,
    'pet' => 'cat',
    'pet_name' => 'Barsik'
];

print_r($person['name']);


$secondPerson = [
    'name' => 'Vasya',
    'age' => 20
];

$secondPerson['hobby'] = 'swimming';
print_r($secondPerson);

unset($secondPerson['name']);

print_r($secondPerson);