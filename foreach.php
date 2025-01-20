<?php 
$colors = ["red","green","blue"];

$person = ["name"=> "Sinapy","age"=>35];

  foreach($colors as $color){
    echo "Color: $color <br>";
  }

  foreach($person as $key => $value){
    echo "Person Details: $key: $value <br>";
  }
 ?>