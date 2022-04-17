<?php

interface infoPegawai {

    public function getAllInfo();

}

abstract class Pegawai {

    protected $nama,
              $umur,
              $jabatan,
              $tempat_tinggal,
              $gaji;

    public function __construct($nama = "nama", $umur = "umur", $jabatan = "jabatan", $tempat_tinggal = "Tempat tinggal", $gaji = 0) 
    {
        $this->nama = $nama;  // <- $this digunakan untuk mengambil property yg berada di dalam sebuah class, lalu diganti dengan local variable yg ada di dalam function
        $this->umur = $umur;
        $this->jabatan = $jabatan;
        $this->tempat_tinggal = $tempat_tinggal;
        $this->gaji = $gaji;

    }
    public function setDataNama( $nama ) {
        $this->nama = $nama;
    }

    public function getDataNama() {
        return $this->nama;
    }

    public function setDataJabatan( $jabatan ) {
        $this->jabatan = $jabatan;
    }

    public function getDataJabatan() {
        return $this->jabatan;
    }

    public function setDataGaji($gaji) {
        $this->gaji = $gaji;
    }

    public function getDataGaji() {
        return $this->gaji;
    }

    public function getPegawai() {
        return "$this->jabatan, $this->tempat_tinggal";
    }
    
    abstract public function getInfo();

}

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


class CetakInfoPegawai {

    public $listPegawai = [];

    public function addPegawai( Pegawai $pegawai ) {
        $this->listPegawai[] = $pegawai;
    }

    public function cetakInfo(){

        $string = "Daftar Pegawai : <br>";  // kenapa ada dua $string ?, karena berfungsi untk penggabungan 2 buah string setelah perulangan foreach

        foreach ($this->listPegawai as $p) {
            $string .= "- {$p->getAllInfo()} <br>";
        }

        return $string;
    }
}


$pegawai1 = new Kantoran("Diar", "25 Tahun", "QA Engineer", "Depok", 4600000, "Karyawan Tetap");
$pegawai2 = new Guru("Ardiansyah", "22 Tahun", "Staff", "Bogor", "Kontrak");

$cetakInfo = new cetakInfoPegawai();
$cetakInfo->addPegawai( $pegawai1 );
$cetakInfo->addPegawai( $pegawai2 );
echo $cetakInfo->cetakInfo();