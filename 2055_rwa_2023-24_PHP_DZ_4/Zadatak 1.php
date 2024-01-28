<?php
class Osoba {

    public $ime;
    protected $prezime;
    private $godine;

    public function __construct($ime, $prezime, $godine) {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->godine = $godine;
    }

    public function ispisiIme() {
        echo "Ime: " . $this->ime . "\n";
    }

    protected function ispisiPrezime() {
        echo "Prezime: " . $this->prezime . "\n";
    }

    private function ispisiGodine() {
        echo "Godine: " . $this->godine . "\n";
    }

    public function ispisiPunoIme() {
        echo "Puno ime: " . $this->ime . " " . $this->prezime . "\n";
    }
}

$osoba1 = new Osoba("Ivo", "Ivić", 30);
$osoba2 = new Osoba("Ana", "Anić", 18);


$osoba1->ispisiIme();        
$osoba1->ispisiPunoIme();    
$osoba2->ispisiPunoIme();
?>