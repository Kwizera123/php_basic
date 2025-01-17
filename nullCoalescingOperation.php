<?php 

// Null Coalescing Operation
$username = $_GET['username'] ?? 'GUEST';
ECHO $username;
echo "<br>";
$user = ['name' => "KWiz Sinapy"];

$age = $user['age'] ?? 'unknown';

echo "Age: " .$age;