<?php

$prices = [100,200,300,400,500];
$i = 0;

array_pop($prices);
while ($i < count($prices)) {
    echo "Oorspronkelijke prijs: " . $prices[$i] . "<br>";

    $new_price = $prices[$i] + 50;
    echo "Nieuwe prijs: " . $new_price . "<br><br>";
    $i++;
}