<?php

$countries = [
    ['land' => 'Nederland', 'hoofdstad' => 'Amsterdam'],
    ['land' => 'België', 'hoofdstad' => 'Brussel'],
    ['land' => 'Duitsland', 'hoofdstad' => 'Berlijn'],
];

foreach ($countries as $country) {
    echo "De hoofdstad van ".$country['land']." is ".$country['hoofdstad']."<br>";
}
