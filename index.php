<?php

function sayHello() {
    echo 'hello';
    $name = 'Vasya';
    echo $name;
}

function getSum($a, $b) {
    $sum = $a + $b;
    echo 'Hello';
    return $sum;
}

$num = getSum(55,10);
echo $num + 20;