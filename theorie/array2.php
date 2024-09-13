<?php

$students = [
    ["Jan", 20, "A"],
    ["Piet", 22, "B"],
    ["Kees", 21, "A"]
];

echo "<pre>";
echo $students[2][0] = 'Eva';

var_dump($students);

$students = [
    "student1" => ["name" => "Jan", "age" => 20, "grade" => "A"],
    "student2" => ["name" => "Piet", "age" => 22, "grade" => "B"],
    "student3" => ["name" => "Kees", "age" => 21, "grade" => "A"]
];

echo $students["student1"]["name"] = 'Eva';

var_dump($students);

$cars = [
    [ "brand" => "Toyota", "model" => "Corolla", "price" => 20000 ],
    [ "brand" => "Honda", "model" => "Civic", "price" => 22000 ],
    [ "brand" => "Ford", "model" => "Focus", "price" => 21000 ]
];

echo $cars[0]["brand"];
$cars[] = ['brand' => 'Fiat', 'model' => 'foo', 'price' => 2000];

var_dump($cars);