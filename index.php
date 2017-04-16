<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script src ="validering.js"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<h2>Obligatorisk oppgave 2017 - Webprogrammering PHP</h2>";
        echo "<br>";
        echo "Oppgave 1a)";
        echo "<br>";
        echo "Delelige tall pÃ¥ 3 er: ";
        for($i=1;$i<100;$i++){
            {
            if ($i%3==0){
            echo $i. ", ";
            }
            }
        }
        echo "<br>";
        echo "<br>";
        echo "Oppgave 1b)";
        echo "<br>";
        echo "Delelige tall pÃ¥ 3 er: ";
        $i=1;
        while($i<100){
            if ($i%3==0){
            echo $i. ", ";
            }
            $i++;
        }
        echo "<br>";
        echo "<br>";
        echo "Oppgave 1c)";
        echo "<br>";
        echo "Gjennomsnittet av tallene er: "; 
        $sum=0;
        $antalltall = 0;
        for($i=1;$i<100;$i++){
            {
            if ($i%3==0){
            $sum+=$i;
            $antalltall++;           
            }
            }
        }
        echo $sum/$antalltall;
        echo "<br>";
        echo "<br>";
        echo "Oppgave 2a)";
        echo "<br>";
        echo "Tall over 5 er: ";
        $liste = array(1,4,8,1,4,10,5,6,2,4,6);
        foreach ($liste as $tall){
            if ($tall >5)
                echo $tall. ", ";
        }
        echo "<br>";
        echo "<br>";
        echo "Oppgave 2b)";
        echo "<br>";
        echo "Antall tall over 5 er: ";
        $antall = 0;
        $liste = array(1,4,8,1,4,10,5,6,2,4,6);
        foreach ($liste as $tall){
            if ($tall >5)
                $antall++;
            }
        echo $antall;
        echo "<br>";
        echo "<br>";
        echo "Oppgave 2c)";
        echo "<br>";
        echo "Tallrekken baklengs ser slik ut: ";
        $liste = array(1,4,8,1,4,10,5,6,2,4,6);
        for ($i=count($liste)-1;$i>=0;$i--){
            echo $liste[$i]. ", ";
        }
        echo "<br>";
        echo "<br>";
        echo "Oppgave 2d)";
        echo "<br>";
        $minste = $liste[0];
        $liste = array(1,4,8,1,4,10,5,6,2,4,6,);
        foreach ($liste as $tall){
            if ($tall < $minste)
               $minste=$tall; 
            }
        echo "Det minste tallet i arrayet er: $minste";
        echo "<br>";
        echo "<br>";
        echo "Oppgave 2e)";
        echo "<br>";
        echo "Det minste tallet i arrayet er: ";
        echo (min(1,4,8,1,4,10,5,6,2,4,6));  
        echo "<br>";
        echo "<br>";
        echo "Oppgave 2f) a)";
        echo "<br>";
        echo "Tallene over 5 er: ";
        $liste = array(1,4,8,1,4,10,5,6,2,4,6);
        function finntalloverfem($liste){
            $talloverfem=array();
            foreach ($liste as $tall){
            if ($tall >5){
                $talloverfem[]=$tall;
            }
            }
        return $talloverfem;
        }
        $svar1 = finntalloverfem($liste);
        foreach ($svar1 as $tall1){
            echo $tall1. ", ";
        }
        
        echo "<br>";
        echo "<br>";
        echo "Oppgave 2f) b)";
        echo "<br>";
        echo "Antall tall over 5 er: ";
        $liste = array(1,4,8,1,4,10,5,6,2,4,6);
        function finnantalltalloverfem($liste, $grense){
            $antalltalloverfem=0;
            foreach ($liste as $tall){
            if ($tall >$grense){
                $antalltalloverfem++;
            }
            }
        return $antalltalloverfem;
        }
        $svar2 = finnantalltalloverfem($liste, 5);
        echo $svar2;
        echo "<br>";
        echo "<br>";
        echo "Oppgave 3";
        echo "<br>";
        ?>
        <h3>Bestilling av kinobillett</h3>
        <form action="side2.php" method="Get" onsubmit="return valider_opplysninger()">
            
            <table>
                <tr>
                    <td>Navn</td><td><input type="text" name="Navn"/></td>
                </tr>
                <tr>
                    <td>Telefon</td><td><input id="telefon" type="text" name="Telefon"/></td>
                </tr>
                <tr>
                    <td>E-post</td><td><input id="epost" type="text" name="E-post"/></td>
                </tr>
                
                <tr>    
                    <td>Filmer</td> 
                    <td>
                    <select name="Filmer">
                    <option value="Heat">Heat</option>
                    <option value="Seven">Seven</option>
                    <option value="Goodfellas">Goodfellas</option>
                    <option value="Gudfaren 2">Gudfaren 2</option>
                    </select>
                    </td>
                </tr> 
                <tr>    
                    <td>Antall</td> 
                    <td>
                <select name="Antall">
                <?php
                for ($i=1; $i<=10; $i++)
                    {
                    ?>
                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php
                    }
                ?>
                </select>
                </tr> 
                <tr>    
                    <td>Billettype</td> 
                    <td>
                    <select name="Billettype">
                    <option value="Ordinær">Ordinær</option>
                    <option value="Student">Student</option>
                    <option value="Honnør">Honnør</option>
                    </select>
                    </td>
                </tr>    
                <tr>
                    <td><input type="submit" value="Bestill" name="Bestill"/></td>
                </tr>
                <tr><td>
                        <a href="liste_ut_bestillinger.php">Liste ut bestillinger</a>
                    </td></tr>
        
    </body>
</html>
