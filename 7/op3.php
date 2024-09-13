<?php

session_start();
$_SESSION['lang'] = "Nederlands";
echo "Taal: " . $_SESSION['lang'];

unset($_SESSION['lang']);