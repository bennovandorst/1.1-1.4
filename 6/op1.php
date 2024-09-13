<?php

$numbers = [5,10,15,20,25];

for ($i = 0; $i < count($numbers); $i++) {
    echo "Origineel getal: ".$numbers[$i]."<br>";

    $multiplied_number = $numbers[$i] * 2;
    echo "Vermenigvuldigd met 2: " . $multiplied_number . "<br><br>";
}