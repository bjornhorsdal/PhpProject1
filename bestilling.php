<?php
include_once 'kunde.php';
Class Bestilling{
    public $kunde;
    public $film;
    public $antall;
    public $type;
    function __construct($kunde, $film, $antall, $type){
        $this->kunde=$kunde;
        $this->film=$film;
        $this->antall=$antall;
        $this->type=$type;
    }
    
    function skrivUt(){
        $this->kunde->skrivUt();
        echo "Film: ".$this->film. "<br>";
        echo "Antall: ".$this->antall. "<br>";
        echo "Type: ".$this->type. "<br>";
    }
    function sendEpost($melding)
    {
        $kunde=$this->kunde;
        mail($kunde->finnEpostAdr(),"Din kinobillett",$melding);
    }
    function lagreTilDb(){
       $kunde=$this->kunde;
       $db = new mysqli('localhost', 'root', '', 'kino');
       $sql = "INSERT INTO bestilling(navn,telefon, epost, film, antall, type)
           VALUES('$kunde->navn', '$kunde->telefon', '$kunde->epost', "
               . "'$this->film', '$this->antall', '$this->type');";
       echo "<br>";
       $res = $db->query($sql);
            if (!$res) {
           echo '<p> Feil ved lagring </p>';
    }
    else {
        $antall_rader = $db->affected_rows;
        if ($antall_rader ==0){
            echo '<p>Feil ved lagring!</p>';
        }
    }
    }
}