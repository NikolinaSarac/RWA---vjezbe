<?php
class Test {
    // Svojstva
    public $ime;
    public $prezime;
    public $ostvareni_bodovi;
    public $max_bodovi;
    public $ocjena;

    // Konstruktor
    public function __construct($ime, $prezime, $ostvareni_bodovi, $max_bodovi) {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->ostvareni_bodovi = $ostvareni_bodovi;
        $this->max_bodovi = $max_bodovi;

        // Pozivanje metode za izračun ocjene prilikom inicijalizacije objekta
        $this->izracunajOcenu();
    }

    // Metoda za izračun ocjene u procentima
    private function izracunajOcenu() {
        if ($this->max_bodovi > 0) {
            $postotak = ($this->ostvareni_bodovi / $this->max_bodovi) * 100;

            // Postavljanje ocjene prema postotku
            if ($postotak >= 90) {
                $this->ocjena = '5';
            } elseif ($postotak >= 80) {
                $this->ocjena = '4';
            } elseif ($postotak >= 70) {
                $this->ocjena = '3';
            } elseif ($postotak >= 60) {
                $this->ocjena = '2';
            } else {
                $this->ocjena = '1';
            }
        } else {
            // Ako je maksimalni broj bodova 0, postavi ocjenu na 'N/A'
            $this->ocjena = '0 bodova';
        }
    }
}

// Inicijalizacije objekata s različitim vrijednostima
$test1 = new Test("Ivan", "Ivić", 80, 100);
$test2 = new Test("Ante", "Antić", 65, 80);
$test3 = new Test("Klara", "Klarić", 95, 100);
$test4 = new Test("Ana", "Anić", 0, 0);

// Ispis rezultata
echo "Osoba 1 - Ime: $test1->ime, Prezime: $test1->prezime, Ocjena: $test1->ocjena" . "\n";
echo "Osoba 2 - Ime: $test2->ime, Prezime: $test2->prezime, Ocjena: $test2->ocjena" . "\n";
echo "Osoba 3 - Ime: $test3->ime, Prezime: $test3->prezime, Ocjena: $test3->ocjena" . "\n";
echo "Osoba 4 - Ime: $test4->ime, Prezime: $test4->prezime, Ocjena: $test4->ocjena" . "\n";
?>