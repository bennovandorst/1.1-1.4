<a href="op2.php?voornaam=Benno&achternaam=van%20Dorst">Klik hier om je naam te versturen</a>

<?php

$voornaam = $_GET["voornaam"];
$achternaam = $_GET["achternaam"];
echo "<br>Voornaam: $voornaam";
echo "<br>Achternaam: $achternaam";