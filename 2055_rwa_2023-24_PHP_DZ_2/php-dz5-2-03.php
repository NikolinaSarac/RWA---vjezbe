<?php

/*3.	Napisati php skriptu s pripadajućom PHP funkcijom koja ima jedan ulazni argumenta (niz brojčanih vrijednosti kao string, odvojenih zarezom), 
Funkcija zatim ispisuje aritmetičku  i geometrijsku sredinu između tih brojeva Izvršiti nekoliko poziva funkcije s proizvoljnim nizom vrijednostima!
Primjer ulaznog niza vrijednosti:
$skup = "1,3,6,7,8,4,4,16,18,14,19";
*/

    echo "Zadatak 3 - rješenje" . "\n";

    function sredine($niz) {
        $brojevi = array_map('intval', explode(',', $niz));
    
        $aritmetickaSredina = array_sum($brojevi) / count($brojevi);
        $geometrijskaSredina = pow(array_product($brojevi), 1 / count($brojevi));
    
        echo "Aritmetička sredina: $aritmetickaSredina" . "\n";
        echo "Geometrijska sredina: $geometrijskaSredina" . "\n" . "\n";
    }
    
    $skup1 = "1,3,6,7,11,10,5,6,8,14,36,8";
    sredine($skup1);
    
    $skup2 = "2,9,8,16,15,64,128,214,1,81";
    sredine($skup2);

?>