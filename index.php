<?php
$person = [
    'name' => 'Victor',
    'age' => 20,
    'hobby' => 'swimming',
    'is_married' => true,
    'pet' => 'cat',
    'pet_name' => 'Barsik'
];

foreach ($person as $key => $item) {
    echo $key . ': ';
    echo $item . "\n";
}