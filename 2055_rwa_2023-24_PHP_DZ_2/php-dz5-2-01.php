<?php
    //1.	Napišite funkciju koja će ispitati da li je broj prost.
    // Prosti brojevi su djeljivi isključivo sa samim sobom ili s 1. Zatim, ispišite sve proste brojeve manje od 100!

    echo "Zadatak 1 - rješenje" . "\n";
    function jeProst($broj) {
        if ($broj < 2) {
            return false;
        }
    
        for ($i = 2; $i * $i <= $broj; $i++) {
            if ($broj % $i === 0) {
                return false;
            }
        }
    
        return true;
    }
    
    echo "Prosti brojevi manji od 100 su: " . "\n";
    for ($i = 2; $i < 100; $i++) {
        if (jeProst($i)) {
            echo $i . "\n";
        }
    }
?>