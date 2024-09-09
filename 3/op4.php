<?php

echo "<pre>";
$product = [
    'name' => 'Laptop',
    'price' => 899.99,
    'inStock' => true,
];
$product['price'] = 799.99;
$product['Brand'] = 'HP';

echo print_r($product);