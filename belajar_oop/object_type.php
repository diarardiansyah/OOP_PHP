<?php

class Pegawai {

    public $nama,
           $umur,
           $jabatan,
           $tempat_tinggal;   // <- Ini namanya property

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
}

class CetakInfoPegawai {

    public function getInfo ( Pegawai $pegawai ){

        $string = "{$pegawai->nama} | {$pegawai->umur}, {$pegawai->getPegawai()}";

        return $string;
    }
}


$pegawai1 = new Pegawai("Diar", "25 Tahun", "QA Engineer", "Depok");
$pegawai2 = new Pegawai("Ardiansyah", "22 Tahun", "Software Engineer", "Bogor");

echo "Pegawai 1 : ". $pegawai1->getPegawai();
echo "<hr>";

$info1 = new CetakInfoPegawai();
$info2 = new CetakInfoPegawai();

echo "Info 1 : ". $info1->getInfo( $pegawai1 );
echo "<hr>";
echo "Info 2 : ". $info2->getInfo( $pegawai2 );
