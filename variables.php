<?php

$name = "Omar";
$age = 23;
$isMale = true;
$height = 1.80;
$salary = null;

echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

var_dump($name, $age, $isMale, $height, $salary);

echo '<br>';

//check if variable is defined
echo isset($name) . '<br />'; //true
echo isset($address) . '<-- false shows up as empty'; //false


// constants
echo '<br>';
define('PI', 3.14);
echo PI;


// Built in PHP constants
echo '<br>';
echo 'SORT ASC:' . SORT_ASC . '<br>';
echo 'PHP_INT_MAX:' . PHP_INT_MAX . '<br>';