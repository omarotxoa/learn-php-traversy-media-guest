<?php

// create an array
$fruits = array('Bannana', 'Apple', 'Orange'); 
$fruits2 = ["Bannana", "Apple", "Orange"];

// print the whole array
var_dump($fruits);
echo '<br>';
var_dump($fruits2);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[1] . '<br>';

// Set element by index
$fruits[0] = 'Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
isset($fruits[2]); // true
isset($fruits[3]); // false

// Append element
$fruits[] = 'Banana';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits) . '<br>';

// Add element at the end of the array
array_push($fruits, 'foo');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array
echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Add element at the beginning of the array
array_unshift($fruits, 'bar');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array
echo array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Split the string into an array
$string = "Banana,Apple,Peach";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

// Combine array elements into string
echo implode(", ", $fruits) . '<br>';

// Check if element exist in the array
echo '<pre>';
var_dump(in_array('Apple', $fruits));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search('Apple', $fruits));
echo '</pre>';

// Merge two arrays
$vegetables = ["Potato", "Cucumber"];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]);
echo '</pre>';

// Sorting of array (Reverse order also)
sort($fruits); //sorts in ascending order
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Reverse sort
rsort($fruits); //sorts in descending order
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// ==
// Associative arrays
// ==


// Create an associative array
$person = [
  'name' => 'Brad',
  'surname' => 'Traversy',
  'age' => 30,
  'hobbies' => ['Tennis', 'Video Games', 'Golfing']
];

echo '<pre>';
print_r($person);
var_dump($person);
echo '</pre>';

// Get element by key
echo $person['name'] . '<br>';

// Set element by key
$person['channel'] = 'TraversyMedia';
echo '<pre>';
print_r($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])) {
  $person['address'] = 'unknown';
}
echo '<pre>';
print_r($person);
echo '</pre>';

$person['address'] = '123 Fake Street';

// Does the same thing as above
$person['address'] ??= 'unknown';
echo '<pre>';
print_r($person);
echo '</pre>';

// Print the keys of the array
echo 'Array Keys' . '<br>';
echo '<pre>';
print_r(array_keys($person));
echo '</pre>';

// Print the values of the array
echo 'Array Values' . '<br>';
echo '<pre>';
print_r(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
echo 'Sorting by keys' . '<br>';
ksort($person); //sorts by keys
echo '<pre>';
print_r($person);
echo '</pre>';

// Two dimensional arrays
$todos = [
  ['title' => 'Todo title 1', 'completed' => true],
  ['title' => 'Todo title 2', 'completed' => false]
];

echo '<pre>';
print_r($todos);
echo '</pre>';
?>


