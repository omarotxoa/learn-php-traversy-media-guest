<?php

// Create Simple String
$name = 'Omar';
$string = 'Hello I am ' . $name;
echo $string . '<br>';

$string2 = "Hello I am $name"; 
echo $string2 . '<br>';

// String concatenation
echo 'Hello' . ' World' . ' and PHP' . '<br>';
// String functions
$string = "    Hello World     ";

echo "1 - " . strlen($string) . '<br>';
echo "1 - " . $string . '<br>';
echo "2 - " . trim($string) . '<br>';
echo "3 - " . ltrim($string) . '<br>';
echo "4 - " . rtrim($string) . '<br>';
echo "5 - " . str_word_count($string) . '<br>';
echo "6 - " . strrev($string) . '<br>';
echo "7 - " . strtoupper($string) . '<br>';
echo "8 - " . strtolower($string) . '<br>';
echo "9 - " . ucfirst('hello') . '<br>';
echo "10 - " . lcfirst('HELLO') . '<br>';
echo "11 - " . ucwords('hello world') . '<br>';
echo "12 - " . strpos($string, 'world') . '<br>'; // Change to world
echo "13 - " . stripos($string, 'world') . '<br>'; // Change to world
echo "14 - " . substr($string, 8) . '<br>';
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>';
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>';

// Multiline text and line breaks
$longText = "
  Hello, my name is Omar
  I am 34,
  I am awesome
  ";

echo $longText . '<br>';
echo nl2br($longText) . '<br>';

// Multiline text and reserve html tags
$longText = "
  Hello, my name is <b>Omar</b>
  I am <b>34</b>,
  I am <b>awesome</b>
  ";

echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';

// htmlentities had to be called twice to work for some reason?? ?? 
echo "3 - " . htmlentities(htmlentities($longText)) . '<br>';

echo "4 - " . nl2br(htmlentities($longText)) . '<br>';
echo "5 - " . html_entity_decode(htmlentities(htmlentities($longText))) . '<br>';
echo "6 - " . htmlspecialchars($longText) . '<br>';

