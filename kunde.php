<?php
Class kunde{
    public $navn;
    public $epost;
    public $telefon;
    function __construct($navn, $telefon, $epost){
        $this->navn=$navn;
        $this->epost=$epost;
        $this->telefon=$telefon;
    }
    function finnEpostAdr(){
        return $this->epost;
    }
    function skrivUt(){
        echo "Navn: ".$this->navn. "<br>";
        echo "E-post: ".$this->epost. "<br>";
        echo "Telefon: ".$this->telefon. "<br>";
    }
}

?>