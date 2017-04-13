<?php
include_once "bestilling.php";
session_start();
$melding = "Takk for din bestilling av kinobillett. Velkommen igjen.";
$bestilling = $_SESSION["Bestilling"];
$bestilling->lagreTilDb();
$bestilling->sendEpost($melding);
echo $melding;

?>