<?php

abstract class BarangElektronik {

    private $merk,
            $warna,
            $processor,
            $tahun_rilis,
            $harga;

    public function __construct( $merk = 'merk', $warna = 'warna', $processor = 'processor', $tahun_rilis = 'tahun_rilis', $harga = 0 ) 
    {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->processor = $processor;
        $this->tahun_rilis = $tahun_rilis;
        $this->harga = $harga;
    }

    public function setDataMerk( $merk ) {
        $this->merk = $merk;
    } 

    public function getDataMerk() {
        $str = "{$this->merk}";
        return $str;
    }

    public function getElektronik() {
        $str = "{$this->merk}, {$this->warna}, {$this->processor}";
        return $str;
    }

    abstract public function getAllInfo();
    
    public function getInfo() 
    {
        $str = "{$this->getElektronik()} | {$this->tahun_rilis}, {$this->harga}";
        return $str;
    }

}

class Laptop extends BarangElektronik {

    public $jenis_barang1;

    public function __construct( $jenis_barang1 = 'jenis_barang1', $merk = 'merk', $warna = 'warna', $processor = 'processor', $tahun_rilis = 'tahun_rilis', $harga = 0 ) 
    {
        parent::__construct( $merk, $warna, $processor, $tahun_rilis, $harga );

        $this->jenis_barang1 = $jenis_barang1;
    }

    public function getAllInfo() 
    {
        return "{$this->jenis_barang1} : {$this->getInfo()}" ; 
    }

}

class Handphone extends BarangElektronik { 

    public $jenis_barang2;

    public function __construct( $jenis_barang2 = 'jenis_barang2', $merk = 'merk', $warna = 'warna', $processor = 'processor', $tahun_rilis = 'tahun_rilis', $harga = 0 )
    {
        parent::__construct( $merk, $warna, $processor, $tahun_rilis, $harga );

        $this->jenis_barang2 = $jenis_barang2;
    }

    public function getAllInfo()
    {
        return "{$this->jenis_barang2} : {$this->getInfo()}";
    }
}

$barang1 = new Laptop("LAPTOP", "Lenovo", "Hitam", "Core i7", "2020", 6000000);
$barang2 = new Handphone("HANDPHONE", "Realme 5", "Ungu", "Snapdragon", "2019", 2700000);

echo $barang1->getAllInfo();
echo "<hr>";
echo $barang2->getAllInfo();



