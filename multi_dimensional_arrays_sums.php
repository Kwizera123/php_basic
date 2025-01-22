<?php // These arrays use named keys
  $products = [
    ["name"=>"Laptop","price" => 1000, "stock" =>5],
    ["name"=>"Mouse","price" => 20, "stock" =>20],
    ["name"=>"Keyboard","price" => 40, "stock" =>40],
  ];
  function calculateTotalPrice($products){
    $total = 0;
    // Access these element
  foreach ($products as $product){
    $total += $product['price']; 
}
return $total;
}
$totlaPrice = calculateTotalPrice($products);
echo "Total price for all products: $" . $totlaPrice;

 

  
?>