<?php 


require_once 'Person.php';

// $p = new Person();
// $p->name = 'Omar';
// $p->surname = 'Ochoa';
// $p->age = 30;

// echo '<pre>';
// print_r($p);
// echo '</pre>';

// echo $p->name . '<br>';

$p2 = new Person('Itzel', 'Nahuatl');
echo '<pre>';
print_r($p2);
echo '</pre>';

echo $p2->name . '<br>';  
$p2->setAge(30);   

echo '<pre>';
print_r($p2);
echo '</pre>';

echo $p2->getAge() . '<br>';   

echo Person::$counter . '<br>'; 

$p3 = new Person('Omar', 'Coatl');
$p3->setAge(34);

echo '<pre>';
print_r($p3);
echo '</pre>';

echo Person::$counter . '<br>';