<?php

class Pegawai {

    public $nama,
           $umur,
           $jabatan,
           $tempat_tinggal;

    public function __construct($nama = "nama", $umur = "umur", $jabatan = "jabatan", $tempat_tinggal = "Tempat tinggal") 
    {
        $this->nama = $nama;  // <- $this digunakan untuk mengambil property yg berada di dalam sebuah class, lalu diganti dengan local variable yg ada di dalam function
        $this->umur = $umur;
        $this->jabatan = $jabatan;
        $this->tempat_tinggal = $tempat_tinggal;

    }

    public function getPegawai(){
        return "$this->jabatan, $this->tempat_tinggal";
    }

    public function getAllInfo() {
        $string = "{$this->nama} | {$this->umur}, {$this->getPegawai()} ";

        return $string;
    }

}

class Kantoran extends Pegawai { // <- Fungsi extends adalah untuk memanggil semua isi yang berada di parent class nya
    public $pekerja1;

    public function __construct($nama = "nama", $umur = "umur", $jabatan = "jabatan", $tempat_tinggal = "Tempat tinggal", $pekerja1="Pekerja 1") {


        parent::__construct($nama, $umur, $jabatan, $tempat_tinggal);

        $this->pekerja1 = $pekerja1;
    }

    public function getAllInfo() {
        
        $string = "Pegawai Kantoran : " . parent::getAllInfo(). " - {$this->pekerja1}";
        // parent digunakan untuk memamnggil method yang berada di class parent nya 

        return $string;
    }
}

class Guru extends Pegawai {

    public $pekerja2;

    public function __construct($nama = "nama", $umur = "umur", $jabatan = "jabatan", $tempat_tinggal = "Tempat tinggal", $pekerja2="Pekerja 2") { 

        parent::__construct($nama, $umur, $jabatan, $tempat_tinggal);

        $this->pekerja2 = $pekerja2;

    }

    public function getAllInfo() {

        $string = "Guru Honorer : " . parent::getAllInfo() . " - {$this->pekerja2}";

        return $string;
    }
}


class CetakInfoPegawai {

    public function getInfo ( Pegawai $pegawai ){

        $string = "{$pegawai->nama} | {$pegawai->umur}, {$pegawai->getPegawai()}";

        return $string;
    }
}


$pegawai1 = new Kantoran("Diar", "25 Tahun", "QA Engineer", "Depok", "Karyawan Tetap");
$pegawai2 = new Guru("Ardiansyah", "22 Tahun", "Staff", "Bogor", "Kontrak");

echo $pegawai1->getAllInfo();
echo "<hr>";
echo $pegawai2->getAllInfo();

