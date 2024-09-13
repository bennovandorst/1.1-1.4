<?php

$matrix = [
    [1 ,2 ,3],
    [4, 5, 6],
    [7, 8, 9]
];

for ($i = 0; $i < count($matrix); $i++) {
    echo $matrix[$i][0] . " " . $matrix[$i][1] . " " . $matrix[$i][2] . "<br>";
}