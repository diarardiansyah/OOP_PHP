<?php

class Pegawai {

    public $nama = "Diar Ardiansyah", 
           $umur = "24 Tahun",
           $jabatan = "QA"; 


    public function getPegawai() {
        return "$this->nama, $this->umur, $this->jabatan"; // $this, berfunsgi agar variable yg ada di dalam functionbisa digunakan secara global diluar function itu sendiri
    }

}

$pegawai1 = new Pegawai();
$pegawai1->nama = "Ardiansyah"; // <- Untuk menimpa value variable yang terdapat di dalam class

$pegawai2 = new Pegawai();
$pegawai2->nama = "Joni";
$pegawai2->umur = "25 Tahun";
$pegawai2->jabatan = "Manager";

$pegawai3 = new Pegawai();
$pegawai3->nama = "Surya";
$pegawai3->umur = "30 Tahun";
$pegawai3->jabatan = "HRD";

echo "Pegawai 2 : ". $pegawai2->getPegawai();
echo "<hr>";

echo "Pegawai 3 :". $pegawai3->getPegawai();


