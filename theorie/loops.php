<?php

// For-loop
echo "<h2>For-loop</h2>";

for ($i = 0; $i < 5; $i++) {
    echo "De waarde van i is: " . $i . "<br>";
}

// While-loop
echo "<h2>While-loop</h2>";

$i = 0;
while ($i < 5) {
    echo "De waarde van i is: " . $i . "<br>";
    $i++;
}

// Do-While loop
echo "<h2>Do-while loop</h2>";

$i = 0;
do {
    echo "De waarde van i is: " . $i . "<br>";
    $i++;
} while ($i < 5);

// Foreach-loop
echo "<h2>Foreach-loop</h2>";

// Numerieke arrays
echo "<h3>Numerieke array</h3>";

$colors = ["rood", "blauw", "groen"];
foreach ($colors as $color) {
    echo "De kleur is: " . $color . "<br>";
}

// Associatieve arrays
echo "<h3>Associatieve array</h3>";

$student = ["name" => "Jan", "age" => 20, "grade" => "A"];
foreach ($student as $key => $value) {
    echo "De " . $key . " is: " . $value . "<br>";
}