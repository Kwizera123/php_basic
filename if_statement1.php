<?php
$age = 25;
$hasID = true;

if($age >= 18 && $hasID){
  echo "You are allowed to enter.";
}else{
  echo "Access denied.";
}


// Output: You are allowed to enter.
echo "<hr>";

$age1 = 16;
$hasPermission = true;

if($age1 >= 18 || $hasPermission){
  echo "You are allowed to enter.";
}else{
  echo "Access denied.";
}
// Output: You are allowed to enter.

echo "<hr>";

$isMember = false;

if(!$isMember){
  echo "You need to sign up.";
}else{
  echo "Welcome back!";
}
// Output: You need to sign up

echo "<hr>";

$age2 = 20;
$isMember2 = true;
$hasDiscountCoupun = false;

if($age2 >= 18 && ($isMember2 || $hasDiscountCoupun)){
  echo "You are eligible for the discount.";
}else{
  echo "No discount available.";
}
// Output: You are eligible for the discount.

echo "<hr>";


?>


