<?php

function hello() {
    echo 'Hello' . '<br>';
}

hello();

function hello2($name) {
    echo 'Hello ' . $name . '<br>';
}

hello2('Omar');
hello2('Itzel');

// create sum of two functions
function sum($a, $b) {
    return $a + $b;
}

echo sum(4, 5) . '<br>';

// create function to sum all numbers using ...$nums
function sumAll(...$nums) {
    $sum = 0;
    foreach($nums as $num) {
        $sum += $num;
    }
    return $sum;
}

echo sumAll(1, 2, 3, 4, 5) . '<br>';

// Arrow functions
function sum2(...$nums) {
    return array_reduce($nums, fn($carry, $n) => $carry + $n);
}

echo sum2(1, 2, 3, 4, 5) . '<br>';