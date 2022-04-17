<?php

class Pegawai {

    public $nama,
           $umur,
           $jabatan,
           $tempat_tinggal,
           $pekerja1,
           $pekerja2;

    public function __construct($nama = "nama", $umur = "umur", $jabatan = "jabatan", $tempat_tinggal = "Tempat tinggal", $pekerja1="Pekerjaan", $pekerja2="Pekerjaan 2") 
    {
        $this->nama = $nama;  // <- $this digunakan untuk mengambil property yg berada di dalam sebuah class, lalu diganti dengan local variable yg ada di dalam function
        $this->umur = $umur;
        $this->jabatan = $jabatan;
        $this->tempat_tinggal = $tempat_tinggal;
        $this->pekerja1 = $pekerja1;
        $this->pekerja2 = $pekerja2;

    }

    public function getPegawai(){
        return "$this->jabatan, $this->tempat_tinggal";
    }

    public function getAllInfo() {
        $string = "{$this->tipe} : {$this->nama} | {$this->umur}, {$this->getPegawai()} ";

        return $string;
    }

}

class Kantoran extends Pegawai { // <- Fungsi extends adalah untuk memanggil semua isi yang berada di parent class nya

    public function getAllInfo() {
        
        $string = "Pegawai Kantoran : {$this->nama} | {$this->umur}, {$this->getPegawai()} - {$this->pekerja1}";
    
        return $string;
    }
}

class Guru extends Pegawai {

    public function getAllInfo() {

        $string = "Guru Honorer : {$this->nama} | {$this->umur}, {$this->getPegawai()} - {$this->pekerja2}";

        return $string;
    }
}


class CetakInfoPegawai {

    public function getInfo ( Pegawai $pegawai ){

        $string = "{$pegawai->nama} | {$pegawai->umur}, {$pegawai->getPegawai()}";

        return $string;
    }
}

$pegawai1 = new Kantoran("Diar", "25 Tahun", "QA Engineer", "Depok", "Karyawan Tetap", null);
$pegawai2 = new Guru("Ardiansyah", "22 Tahun", "Staff", "Bogor", null, "Kontrak");


echo $pegawai1->getAllInfo();
echo "<hr>";
echo $pegawai2->getAllInfo();

