<?php

function sayHello() {
    echo 'hello';
    $name = 'Vasya';
    echo $name;
}

sayHello();

function sum($a, $b) {
    $sum = $a + $b;
    echo $sum;
}

sum(15,10);