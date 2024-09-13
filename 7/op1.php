<form method="POST" action="op1.php">
    Geboortedatum: <input type="date" name="date"><br>
    Telefoonnummer: <input type="tel" name="tel"><br>
    <input type="submit" value="Verstuur">
</form>
<?php

$date = $_POST['date'];
$tel = $_POST['tel'];
echo "Geboortedatum: " . $date . "<br>";
echo "Telefoonnummer: " . $tel;
