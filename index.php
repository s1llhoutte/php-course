<?php

$persons = [
    [
        'name' => 'Victor',
        'age' => 20,
        'hobby' => 'swimming',
        'is_married' => true,
        'pet' => 'cat',
        'pet_name' => 'Barsik',
        'cars' => ['jigul', 'moskich', 'volga']
    ],
    [
        'name' => 'Karl',
        'age' => 20,
        'hobby' => 'swimming',
        'is_married' => true,
        'pet' => 'cat',
        'pet_name' => 'Barsik'
    ],
    [
        'name' => 'Margo',
        'age' => 18,
        'hobby' => 'swimming',
        'is_married' => true,
        'pet' => 'cat',
        'pet_name' => 'Barsik'
    ]
];

foreach ($persons as $person) {
    print_r($person['name']);
}