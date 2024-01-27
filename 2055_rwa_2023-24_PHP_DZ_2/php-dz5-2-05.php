<?php
/*

*/

    echo "Zadatak 5 - rješenje" . "\n";
    $boje = array('B' => 'Blue', 'G' => 'Green', 'r' => 'Red');
    function promijeni($ulazno, $oblik) {
        $rezultat = [];
    
        foreach ($ulazno as $ulazno) {
            if ($oblik == 'Upper') {
                $rezultat[] = strtoupper($ulazno);
            } elseif ($oblik == 'Lower') {
                $rezultat[] = strtolower($ulazno);
            }
        }
    
        return $rezultat;
    }

    $velikaSlova = promijeni($boje, 'Upper');

    echo "Velika slova: ";
    foreach ($velikaSlova as $velika) {
        echo $velika . ", " ;
    }
   
    
    $malaSlova = promijeni($boje, 'Lower');
    echo  "\n" . "Mala slova: ";
    foreach ($malaSlova as $mala) {
        echo $mala . ", ";
    }
?>