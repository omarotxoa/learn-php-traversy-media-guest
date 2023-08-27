<?php

// Declaring Numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';

// Assignment with math operators
echo 'Assignment with math operators' . '<br>';
echo 'a:' . $a . '<br>';
echo 'b:' . $b . '<br>';
echo '$a = $a + $b:' . ($a += $b) . '<br>';
echo '$a += $b:' . ($a += $b) . '<br>';

// Increment operator
echo 'Increment operator' . '<br>';
echo $a++ . '<br />'; //prints a first then increments by 1
echo ++$a . '<br />'; //increments by 1 then prints a

// Decrement operator
echo 'Decrement operator' . '<br>';
echo $a-- . '<br />'; //prints a first then decrements by 1
echo --$a . '<br />'; //decrements by 1 then prints a

// Number checking functions
is_float(1.25); // true
is_double(1.25); // true
is_int(5); // true
is_numeric("3.45"); // true
is_numeric("3g.45"); // false

// Conversion
$strNumber = '12.34'; //string value
$number = (float)$strNumber; //converts to float
var_dump($number);
echo '<br>';
$number = (int)$strNumber; //converts to int
$number = intval($strNumber); //converts to int
var_dump($number);
echo '<br>';

// Number functions
echo "abs(-15): " . abs(-15) . '<br>'; //absolute value
echo "pow(2, 3): " . pow(2, 3) . '<br>'; //2 to the power of 3
echo "sqrt(16): " . sqrt(16) . '<br>'; //square root of 16
echo "max(2, 9, 3): " . max(2, 9, 3) . '<br>'; //returns the max value
echo "min(2, 9, 3): " . min(2, 9, 3) . '<br>'; //returns the min value
echo "round(2.4): " . round(2.4) . '<br>'; //rounds to the nearest int
echo "round(2.6): " . round(2.6) . '<br>'; //rounds to the nearest int
echo "floor(2.6): " . floor(2.6) . '<br>'; //rounds down to the nearest int
echo "ceil(2.4): " . ceil(2.4) . '<br>'; //rounds up to the nearest int

// Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, '.', ',') . '<br>'; //formats the number to 2 decimal places, with a comma as the thousands separator