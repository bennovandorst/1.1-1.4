<?php
date_default_timezone_set('UTC');

$day = date('l');

switch ($day) {
    case "Monday":
        echo "Vandaag is het Maandag";
        break;
    case "Tuesday":
        echo "Vandaag is het Dinsdag";
        break;
    case "Wednesday":
        echo "Vandaag is het Woensdag";
        break;
    default:
    echo "Onbekende dag";
}