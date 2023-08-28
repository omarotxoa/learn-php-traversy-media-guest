<?php 

// magic constants
echo __DIR__.'<br>'; // C:\xampp\htdocs\php_tutorial\include_require\file_system
echo __FILE__.'<br>'; // C:\xampp\htdocs\php_tutorial\include_require\file_system\index.php
echo __LINE__.'<br>'; // 8

// create directory
// mkdir('test');

// rename directory
// rename('test', 'test2');

// delete directory
// rmdir('test2');

// read files and folders inside directory
echo file_get_contents('lorem.txt').'<br>';

$files = scandir('../');
echo '<pre>';
print_r($files);
echo '</pre>';

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');
echo '<br>';
file_put_contents('sample.txt', 'Some content');

// file_get_contents from URL
$usersJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
echo $usersJson;
$users = json_decode($usersJson, true);
echo '<pre>';
print_r($users);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
echo file_exists('sample.txt') . '<br />'; 
echo is_dir('test') . '<br />'; 
echo filemtime('sample.txt') . '<br />'; 
echo filesize('sample.txt') . '<br />'; 
echo disk_free_space('C:') . '<br />'; 
echo disk_total_space('C:') . '<br />'; 

