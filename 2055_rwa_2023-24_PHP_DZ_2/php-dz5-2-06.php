<?php
/*
Izračun i prosjek prosječne temperature 
*/

    echo "Zadatak 6 - rješenje" . "\n";
    $temperature = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

    function analizaTemperature($temperature) {
        $temperatureArray = array_map('intval', explode(',', $temperature));
    
        $prosjecnaTemperatura = array_sum($temperatureArray) / count($temperatureArray);

        sort($temperatureArray);
        $najnizeTemperature = array_slice($temperatureArray, 0, 10);
        $najviseTemperature = array_slice($temperatureArray, -10);
 
        echo "Prosječna temperatura: $prosjecnaTemperatura" . "\n";
        echo "Deset najnižih temperatura: " . implode(', ', $najnizeTemperature) . "\n";
        echo "Deset najviših temperatura: " . implode(', ', $najviseTemperature) . "\n";
    }
    analizaTemperature($temperature);
    

?>