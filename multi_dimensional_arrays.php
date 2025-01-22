<?php 
  // These arrays use named keys

  $products = [
    ["name"=>"Laptop","price" => 1000, "stock" =>5],
    ["name"=>"Mouse","price" => 20, "stock" =>20],
    ["name"=>"Keyboard","price" => 40, "stock" =>40],
  ];

  // Access these element
  foreach ($products as $product){
  echo $product["name"] . " costs $" . $product['price']. "<br>";
}
?>