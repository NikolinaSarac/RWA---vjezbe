<?php
/*Zadatak 1
1. Korištenjem for petlje ispišite niz brojeve od 1 do 20 i njihove kvadrate. Svaki par ispisati u novi red! 
*/

    echo "Zadatak 1 - rješenje" . "\n"  ;
    for ($i = 1; $i <= 20; $i++) {
        $kvadrat = $i * $i;
        echo "Broj : " . $i . ", a kvadrat broja : " . $kvadrat . "\n";
    }
    echo "\n" . "\n";

/*Zadatak 2
2. Izračunati sumu prvih 100 prirodnih brojeva korištenjem for petlje 
*/

    echo "Zadatak 2 - rješenje" . "\n" ;

    $suma = 0;
    for($i = 1; $i<=100; $i++){
        $suma += $i;
    }

    echo "Ukupna suma prvih 100 prirodnih brojeva je : " . $suma ;
    echo "\n" . "\n";

/*Zadatak 3
3.	Izračunati sumu prvih 100 prirodnih brojeva korištenjem while petlje
*/
  
    echo "Zadatak 3 - rješenje" . "\n";
    $i=1;
    while($i<=100){
        $suma += $i;
        $i++;
    }

    echo "Ukupna suma prvih 100 prirodnih brojeva je : " . $suma;
    echo "\n" . "\n";

/*Zadatak 4
4.	Napisati php skriptu/kod koja/i ispisuje sve parne brojeve od 1 do 100 , svaki broj u novom retku 
*/

    echo "Zadatak 4 - rješenje" . "\n";
    for($i = 2; $i<=100; $i+=2){
        echo "$i" . "\n";
    }

    echo "\n" . "\n";

/*Zadatak 5
5.	Ispisati sve troznamenkaste parne brojevi!
*/

    echo "Zadatak 5 - rješenje" . "\n";
    for($i=100; $i<1000;$i++){
        if($i%2==0){
            echo "$i" . "\n";
        }
    }
    echo "\n" . "\n";

/*Zadatak 6
6.	Ispisati sve dvoznamenkaste brojevi djeljive s 3 i 5 ili s oba!
*/

    echo "Zadatak 6 - rješenje" . "\n";
    for($i=10; $i<100;$i++){
        if($i%3==0 || $i%5==0){
            echo "$i" . "\n";
        }
    }
    echo "\n" . "\n";

/*Zadatak 7
Izračunava se prosječan broj stanovnika korz godine, koje godine je bilo najviše stanovnika i koliko godina se provodilo mjerenje
*/

    echo "Zadatak 7 - rješenje" . "\n" ;
    $grad = array(1995 => 24000, 1997 => 25510, 1998 => 29154, 2000 =>32124, 2002 => 33114);

    //a) Prosječan broj stanovnika kroz sve godine
    $brojStanovnika = 0;
    $godine = 0;

    foreach($grad as $stanovnici){
        $brojStanovnika += $stanovnici;
        $godine++;
    }

    $prosjecnoStanovnika = $brojStanovnika / $godine;
    echo "a) Prosječan broj stanovnika kroz sve godine - " . $prosjecnoStanovnika . "\n";

    //b) Koje godine je bilo najviše stanovnika? 
    $maxStanovnika = 0;
    $godMaxStan=0;

    foreach($grad as $godina => $stanovnici){
        if($stanovnici > $maxStanovnika){
            $maxStanovnika = $stanovnici;
            $godMaxStan = $godina;
        }
    }
    echo "b) Najviše stanovnika bilo je " . $maxStanovnika . ", godine - " . $godMaxStan . "\n";
    
    //c) Koje godine je bilo najviše stanovnika? 
    echo "c) Mjerenje se provodilo ukupno - " . $godine . " godina. " . "\n";
    echo "\n" . "\n";

/*Zadatak 8
8.	Napišite funkciju koja će ispitati da li je broj prost. Prosti brojevi su djeljivi isključivo sa samim sobom ili s 1. Zatim, ispišite sve proste brojeve manje od 100!
*/

    echo "Zadatak 8 - rješenje" . "\n";
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
    echo "\n" . "\n";

/*Zadatak 9
9.	Napišite PHP program koji će sve članove polja $brojevi zbrojiti pomoću foreach petlje:
$brojevi = array( 1, 22, 3, 4, 5, 55, 12, 49,94, 23, 7);
*/

    echo "Zadatak 9 - rješenje" . "\n";
    $brojevi = array( 1, 22, 3, 4, 5, 55, 12, 49,94, 23, 7);
    
    $suma = 0;
    foreach($brojevi as $broj){
        $suma += $broj;
    }
    echo "Ukupna suma svih članova polja je - " . $suma . "\n";
    echo "\n" . "\n";

/*Zadatak 10
10. Pravokutnik
*/

    echo "Zadatak 10 - rješenje" . "\n";
    $a=10;
    $b=5;
    $pov_pravokutnika = $a * $b;
    echo "Površina pravokutnika širine " . $a . " i dužine " . $b . " iznosi : " . $pov_pravokutnika  . "\n";


?>