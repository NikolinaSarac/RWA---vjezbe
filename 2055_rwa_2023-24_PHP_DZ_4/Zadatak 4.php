<?php
class Kalkulator {
    private $rezultat;

    public function __construct() {
        $this->rezultat = 0;
    }

    public function zbroji($broj) {
        $this->rezultat += $broj;
    }

    public function oduzmi($broj) {
        $this->rezultat -= $broj;
    }

    public function mnozi($broj) {
        $this->rezultat *= $broj;
    }

    public function dijeli($broj) {
        if ($broj != 0) {
            $this->rezultat /= $broj;
        } else {
            echo "Greška: Dijeljenje s nulom nije dozvoljeno." . "\n";
        }
    }

    // Metoda za dobijanje trenutnog rezultata
    public function rezultat() {
        return $this->rezultat;
    }
}

// Kreiranje objekta kalkulatora
$kalkulator = new Kalkulator();

// Izvršavanje operacija
$kalkulator->zbroji(5);
echo "Trenutni rezultat: " . $kalkulator->rezultat() . "\n";

$kalkulator->oduzmi(3);
echo "Trenutni rezultat: " . $kalkulator->rezultat() . "\n";

$kalkulator->mnozi(4);
echo "Trenutni rezultat: " . $kalkulator->rezultat() . "\n";

$kalkulator->dijeli(2);
echo "Trenutni rezultat: " . $kalkulator->rezultat() . "\n";

$kalkulator->dijeli(0);  

?>