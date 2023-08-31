<?php

$url = 'https://jsonplaceholder.typicode.com/users';

// Sample example to get data from the URL 
$resource = curl_init($url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($resource);
$httpcode = curl_getinfo($resource, CURLINFO_HTTP_CODE);   
echo '<pre>';
var_dump($httpcode);
echo '</pre>';
curl_close($resource);
echo $result;


// Post request
$resource = curl_init();
$user = [
    'name' => 'John',
    'username' => 'Doe',
    'email' => 'test@gmail.com'
];
curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($user),
    CURLOPT_HTTPHEADER => ['content-type: application/json']            
]);
$result = curl_exec($resource);
curl_close($resource);
echo $result;
