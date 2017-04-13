<?php
include_once "bestilling.php";
echo "Bestillinger";
echo "<br>";
$bestillinger = array();
$db = new mysqli('localhost', 'root', '', 'kino');
$sql = 'SELECT * FROM bestilling;';
$res = $db->query($sql);
        if(!$res){
            echo '<p>Fant ingen bestillinger!</p>';
        }
        else{
            $antall_rader = $db->affected_rows;
            for ($i=0; $i < $antall_rader; $i++){
                $rad = $res->fetch_object();
                $kunde= new Kunde($rad->navn, $rad->epost, $rad->telefon);
                $bestilling = new Bestilling($kunde, $rad->film, $rad->antall, $rad->type);
                $bestillinger[]=$bestilling;
                               
            }   
        }
        
        foreach($bestillinger as $bestilling){
            $bestilling->skrivUt();
            echo "<br>";
        }
?>

