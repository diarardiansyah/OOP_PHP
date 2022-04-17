<?php

class Kantoran extends Pegawai implements infoPegawai { // <- Fungsi extends adalah untuk memanggil semua isi yang berada di parent class nya
    public $pekerja1;

    public function __construct($nama = "nama", $umur = "umur", $jabatan = "jabatan", $tempat_tinggal = "Tempat tinggal", $gaji = 0, $pekerja1="Pekerja 1") {


        parent::__construct($nama, $umur, $jabatan, $tempat_tinggal, $gaji);

        $this->pekerja1 = $pekerja1;
    }

    public function getInfo() {
        $string = "{$this->nama} | {$this->umur}, {$this->getPegawai()} | ( Rp. {$this->gaji} ) ";

        return $string;
    }

    public function getAllInfo() {
        
        $string = "Pegawai Kantoran : " . $this->getInfo(). " - {$this->pekerja1}";
        // parent digunakan untuk memamnggil method yang berada di class parent nya 

        return $string;
    }
}