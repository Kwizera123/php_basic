<?php

function greet($name){
  echo "Hello, {$name} Welcome to php";
}

//greet("Sinapy");

function calculateRectangleArea($length, $width){
  return $length * $width;
}

$areaRectangle = calculateRectangleArea(10, 5);

//echo 34 + $areaRectangle;

function calculateSum($a, $b){
  return $a + $b;
}
$sum = calculateSum(5, 10);

echo "The sum is: $sum";