<?php

$test = "123";
// === - Datatypen controle "==" Datatypen niet gecontroleerd komt gewoon in if
if ($test === "foo") {

} else if ($test == "bar") {

}else{

    }

$action = "test3";
// $action == casename
switch ($action) {
    case "test1":

        break;
        case "test2":

            break;
        default:

}

$age = 13;

if($age <= 18) { // Lang
    echo "Volwassen";
}else{
    echo "Kind";
}

echo ($age <= 18) ? "Volwassen" : "Kind"; // Kort

if(isset($age)){
    echo "Dit is de leeftijd: ".$age;
}

echo $age ?? "Geen leeftijd beschikbaar";