<?php 

function isEven($number)
{
    if($number % 2 == 0) {
    return true;
}else{
  return false;
  }
}


$number = 15;

if(isEven($number)){
  echo "The number {$number} is Even";
}else{
  echo "The number {$number} is Not Even";
}


?>