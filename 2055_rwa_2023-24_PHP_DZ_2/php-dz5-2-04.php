<?php
/*4.	Zadatak: Napisati PHP/HTML program koji generira sljedeći ispis unutar preglednika putem PHP koda. 
PHP kod računa faktorijel za svaki broj do broja koji unesemo kao argument funkcije. 
*/

    echo "Zadatak 4 - rješenje" . "\n";

    function faktorijel($broj) {
        $rezultat = 1;
        for ($i = 1; $i <= $broj; $i++) {
            $rezultat *= $i;
        }
        echo "$broj ! = $rezultat " . "\n";
    }
    
    $uneseniBroj = 5;
    for ($broj = 1; $broj <= $uneseniBroj; $broj++) {
        faktorijel($broj);
    }

?>