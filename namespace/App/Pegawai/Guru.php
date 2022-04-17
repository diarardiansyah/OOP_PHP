<?php

class Guru extends Pegawai implements infoPegawai {

    public $pekerja2;

    public function __construct($nama = "nama", $umur = "umur", $jabatan = "jabatan", $tempat_tinggal = "Tempat tinggal", $pekerja2="Pekerja 2") { 

        parent::__construct($nama, $umur, $jabatan, $tempat_tinggal);

        $this->pekerja2 = $pekerja2;

    }

    public function getInfo() {
        
        $string = "{$this->nama} | {$this->umur}, {$this->getPegawai()} | ( Rp. {$this->gaji} ) ";

        return $string;
    }

    public function getAllInfo() {

        $string = "Guru Honorer : " . $this->getInfo() . " - {$this->pekerja2}";

        return $string;
    }
}