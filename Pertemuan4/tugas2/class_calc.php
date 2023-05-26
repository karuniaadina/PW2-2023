<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
class Calculator {
    private $no1;
    private $no2;

    public function __construct($n1, $n2) {
        $this->no1 = $n1;
        $this->no2 = $n2;
    }

    public function tambah() {
        return $this->no1 + $this->no2;
    }

    public function kurang() {
        return $this->no1 - $this->no2;
    }

    public function kali() {
        return $this->no1 * $this->no2;
    }
    

    public function bagi() {
        return $this->no1 / $this->no2;
    }
}
    // Buat object dan tampilkan masing-masing method
    $calculator = new Calculator(10, 5);

     echo "Penjumlahan = " . $calculator->tambah() . "<br>";
     echo "Pengurangan = " . $calculator->kurang() . "<br>";
     echo "Perkalian= " . $calculator->kali() . "<br>";
     echo "Pembagian= " . $calculator->bagi();
?>