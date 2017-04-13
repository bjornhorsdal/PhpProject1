<?php
echo "<h2>Dette er din bestilling</h2>";
include_once "kunde.php";
include_once "bestilling.php";
session_start();
//To do: Validering av felter med Regex
$kunde=new Kunde($_REQUEST["Navn"],$_REQUEST["E-post"],$_REQUEST["Telefon"]);
$bestilling=new Bestilling($kunde, $_REQUEST["Filmer"], $_REQUEST["Antall"], $_REQUEST["Billettype"]);
$bestilling->skrivUt();
$_SESSION["Bestilling"]=$bestilling;

echo "Dato " . date("d.m.Y") . "<br>";
echo "Klokkeslett " . date("H:m")."<br>";

?>
<form action="side3.php" method="Get">
<table>
 <tr>
    <td><input type="submit" value="Bekreft din bestilling" name="Bestill"/></td>
</tr>
</table>
</form>    



