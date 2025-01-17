<?php 

$a = (string) 5; // integer
$b = (string) 5.5; // float
$c = (int) "five"; // string
$d = (string) false; // boolean
$e = (object) ["name"=> "Kwizera"]; // array
$ee = ["name"=> "Sinapy"]; // array
$f = (string) NULL; // NULL

echo $e->name;
echo "<br>";
echo $ee['name'];

/*
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
var_dump($f);
echo "<br>";
*/
