<?php
    /*2.	Napisati php skriptu s pripadajućim PHP funkcijom koja ima dva ulazna argumenta (brojčane vrijednosti), 
    Funkcija zatim ispisuje aritmetičku  sredinu između ta dva broja. Izvršiti nekoliko poziva funkcije s proizvoljnim vrijednostima! */

    echo "Zadatak 2 - rješenje" . "\n";
    function aritmetickaSredina ($a, $b){
        $sredina = ($a + $b) / 2;
        echo "Aritmetička sredina brojeva $a i $b je : " . $sredina . "\n";
    }
    
    aritmetickaSredina(2,5);
    aritmetickaSredina(11,25);
    aritmetickaSredina(21,10);
?>