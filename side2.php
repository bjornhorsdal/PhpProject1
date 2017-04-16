<?php
echo "<h2>Dette er din bestilling</h2>";
include_once "kunde.php";
include_once "bestilling.php";
session_start();
$telefon = $_REQUEST["Telefon"];
$epost = $_REQUEST["E-post"];
if (!preg_match('/^[\d]+$/',$telefon)  ||  !preg_match('/@/', $epost)){
    echo "Telefonummer må bare bestå av tall og e-post må inneholde alfakrøll!";
    echo "<br>";
    echo "<tr><td>
         <a href='index.php'>Tilbake til bestilling</a>
        </td></tr>";
}
else {
$kunde=new Kunde($_REQUEST["Navn"],$_REQUEST["Telefon"],$_REQUEST["E-post"]);
$bestilling=new Bestilling($kunde, $_REQUEST["Filmer"], $_REQUEST["Antall"], $_REQUEST["Billettype"]);
$bestilling->skrivUt();
$_SESSION["Bestilling"]=$bestilling;

echo "Dato " . date("d.m.Y") . "<br>";
echo "Klokkeslett " . date("H:m")."<br>";
echo '<form action="side3.php" method="Get">
<table>
 <tr>
    <td><input type="submit" value="Bekreft din bestilling" name="Bestill"/></td>
</tr>
</table>
</form>';
}
?>
<tr><td>
        <a href="index.php">Avbryt bestillingen og gå tilbake til forsiden</a>
</td></tr>
        




