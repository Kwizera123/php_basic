<?php 
// this arrays use named keys
$person = [
  "name" =>"Kwizera Sinapy",
  "age"  => 24,
  "city" => "Muhanga"
];
// Add another element to this
echo $person['professional'] = "PHP Developer";
echo "<br>";
foreach ($person as $key => $value){
  echo "$key: $value <br>";

}
$country = [
  "name" => "Rwanda",
  "Provinces_No" => 4,
  "district" => 30,
   
];
echo $country['Provinces_No'];
echo "<br>";
foreach($country as $key => $value){
  echo "$key: $value <br>";
}
?>