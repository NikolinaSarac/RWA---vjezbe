<?php


class Person {
    public $ime;
    public $prezime;
    public $masa_kg;

    public function __construct($ime, $prezime, $masa_kg) {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->masa_kg = $masa_kg;
    }

    public function ispisiTezinu() {
        echo "$this->ime $this->prezime teži $this->masa_kg kg." . "\n";
    }

    public function masaNaMjesecu() {
        $tezina_na_mjesecu = $this->masa_kg * (1/6);
        return $tezina_na_mjesecu;
    }

    public function ispisiTezinuNaMjesecu() {
        $tezina_na_mjesecu = $this->masaNaMjesecu();
        echo "$this->ime $this->prezime teži $tezina_na_mjesecu kg na Mjesecu." . "\n";
    }
}

$osoba1 = new Person("Ivo", "Ivić", 70);
$osoba2 = new Person("Ante", "Antić", 60);
$osoba3 = new Person("Ana", "Anić", 80);

$osoba1->ispisiTezinu();
$osoba1->ispisiTezinuNaMjesecu();

$osoba2->ispisiTezinu();
$osoba2->ispisiTezinuNaMjesecu();

$osoba3->ispisiTezinu();
$osoba3->ispisiTezinuNaMjesecu();

?>