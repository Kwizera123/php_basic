<?php

$age =25;
$hasID = true;

if($age >= 18 && $hasID){
  echo "You are allowed to enter.";
}else{
  echo "Access denied.";
}
 echo "<br>";
 echo "<br>";
$age_one = 16;
$hasPermission = true;

if($age_one >= 18 || $hasPermission){
  echo "you are allowed to enter...";
}else{
  echo "Access denied..";
}
// Output: You are allowed to enter.

echo "<br>";
echo "<br>";

$isMember = false;

if(!$isMember){
  echo "You need to sign up.";
}else{
  echo "Welcome back!";
}
// Output: You need to sign up.

echo "<br>";
echo "<br>";

$age_two = 20;
$ismamber = true;
$hasDiscountCoupon = false;

if($age_two >= 18 && ($ismamber || $hasDiscountCoupon)){
  echo "You are eligible for the discount.";
}else{
  echo "No dicount available.";
}
// Output: You are eligible for the discount.

?>