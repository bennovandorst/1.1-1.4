<?php

$numericArray = [1,2,3,4,5,6,7,8,9];
$numericArray2 = ['Jan', 'Piet', 'Klaas'];

echo $numericArray[4]; // Waarde: 5. Array begint bij 0 te tellen
echo $numericArray2[1];

$associativeArray = [
    'naam1' => 'Jan',
    'naam2' => 'Piet',
    'naam3' => 'Klaas'
];

echo $associativeArray['naam1'];