<?php   

$fruits = ["Apple","Banana","Orange","Mango"];
$vegies = ["Carrot","Plantain","Lettuce"];

//echo count($fruits);

// array_push($fruits,"Mango" );
// array_pop($fruits);

// $merged = array_merge($fruits, $vegies);
// print_r($merged);

// Ckecking to see if value exists in array
// if(in_array("Banana", $fruits)){
//   echo "Banana is in the array";
// }else{
//   echo "That one is not in the array";
// }

// $numbers = [1,3,5,8,0,2,4,6];

// $person=["status"=>"Married", "professional"=>"php dev","name"=>"Kwizera", "age"=>18, "city"=>"Muhanga"];

// ksort($person);

// sort($numbers);
// print_r($numbers);
// print_r($person);

$sliced = array_slice($fruits, 1,2);
print_r($sliced);
