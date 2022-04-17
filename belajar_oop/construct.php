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
        return "$this->jabatan, $this->tempat_tinggal,";
    }
}

$pegawai1 = new Pegawai("Diar", "25 Tahun", "QA Manual", "Depok");
$pegawai2 = new Pegawai("Jono", "26 Tahun", "Android Dev", "Jakarta");
$guru1 = new Pegawai("Sinta", "20 Tahun", "Guru Matematika", "Depok");

echo "Pegawai 1 : ". $pegawai1->getPegawai();
echo "<hr>";
echo "Pegawai 2 : ". $pegawai2->getPegawai();
echo "<hr>";
echo "Guru 1 : ". $guru1->getPegawai();
