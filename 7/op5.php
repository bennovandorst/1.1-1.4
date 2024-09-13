<form method="POST" action="op5.php">
    Favoriete Kleur: <input type="color" name="color"><br>
    <input type="submit" value="Verstuur">
</form>

<?php
$color = $_POST["color"];

session_start();
$_SESSION['color'] = $color;
echo $_SESSION['color'];


