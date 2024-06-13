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
        'is_married' => false,
        'pet' => 'cat',
        'pet_name' => 'Barsik'
    ],
    [
        'name' => 'Margo',
        'age' => 18,
        'hobby' => 'swimming',
        'is_married' => false,
        'pet' => 'cat',
        'pet_name' => 'Barsik'
    ]
];

//foreach ($persons as $person) {
//    if ($person['is_married']) {
//        echo 'женат: ' . $person['name'] . "\n";
//    } else {
//        echo 'не женат: ' . $person['name'] . "\n";
//    }
//}

$flat = '20';
$name = 'Gena';

if ($flat == 20 && $flat === 20) {
    echo 'YES';
} else {
    echo 'NO';
}