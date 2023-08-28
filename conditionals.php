<?php 

$age = 32;
$salary = 300000;

// Sample if
if($age === 20){
    echo "1" . '<br>';
}

// Without circle braces
if($age === 20) echo "1" . '<br>';

// Sample if-else
if($age > 20){
    echo "1" . '<br>';
} else {
    echo "2" . '<br>';
}

// Difference between == and ===
if($age == 20){
    echo "1".'<br>';
}

if($age == '20'){
    echo "1".'<br>';
}

if($age === '20'){
    echo "1".'<br>';
}

// if AND
if($age > 20 && $salary === 300000){
    echo "Do something".'<br>';
}

// if OR
if($age > 20 || $salary === 300000){
    echo "Do something".'<br>';
}

// Ternary if
echo $age < 22 ? 'Young' : 'Old';

// Short ternary
$myAge = $age ?: 18;
echo '<pre>';
var_dump($myAge);
echo '</pre>';

// Null coalescing operator
$myName = isset($name) ? $name : 'John';
echo $myName.'<br>';
// Same as
$myName = $name ?? 'John';
echo $myName.'<br>';

// switch
$userRole = 'admin'; // editor, user, admin
switch($userRole){
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'Invalid role';
}


