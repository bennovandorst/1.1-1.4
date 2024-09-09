<?php

echo "<pre>";

$products = [
    [ "name" => "Laptop", "price" => 999.99, "stock" => 30 ],
    [ "name" => "Smartphone", "price" => 699.99, "stock" => 30 ],
    [ "name" => "Monitor", "price" => 199.99, "stock" => 30 ],
    [ "name" => "Toetsenbord", "price" => 49.99, "stock" => 30 ]
];

echo $products[1]["name"]." kost ".$products[1]["price"]." euro";
echo "<br>";

$products[3]["stock"] = 120;

$products[] = [ "name" => "Tablet", "price" => 299.99, "stock" => 50 ];
echo print_r($products);

