<?php

// print current date 
echo date('Y-m-d H:i:s') . '<br>';

// print yesterday
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br>';

// different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s') . '<br>';

// print current timestamp
echo time() . '<br>';

// parse date: https://www.php.net/manual/en/function.date-parse.php
$parsedDate = date_parse('2020-10-12 09:00:00');
echo '<pre>';
print_r($parsedDate);
echo '</pre>';

// parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php

$dateString = 'February 4 2020 12:45:35';
$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
print_r($parsedDate);
echo '</pre>';

