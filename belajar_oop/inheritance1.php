<?php

class Pegawai {

    public $nama,
           $umur,
           $jabatan,
           $tempat_tinggal,
           $pekerja1,
           $pekerja2,
           $jenis_pekerja;   // <- Ini namanya property

    public function __construct($nama = "nama", $umur = "umur", $jabatan = "jabatan", $tempat_tinggal = "Tempat tinggal", $pekerja1="Pekerjaan", $pekerja2="Pekerjaan 2", $jenis_pekerja) 
    {
        $this->nama = $nama;  // <- $this digunakan untuk mengambil property yg berada di dalam sebuah class, lalu diganti dengan local variable yg ada di dalam function
        $this->umur = $umur;
        $this->jabatan = $jabatan;
        $this->tempat_tinggal = $tempat_tinggal;
        $this->pekerja1 = $pekerja1;
        $this->pekerja2 = $pekerja2;
        $this->jenis_pekerja = $jenis_pekerja;

    }

    public function getPegawai(){
        return "$this->jabatan, $this->tempat_tinggal";
    }

    public function getAllInfo() {
        $string = "{$this->jenis_pekerja} : {$this->nama} | {$this->umur}, {$this->getPegawai()} ";

        if ( $this->jenis_pekerja == "Pegawai Kantor") {

            $string .= " - {$this->pekerja1}";

        } else if ( $this->jenis_pekerja == "Guru Honorer") {
            $string .= " - {$this->pekerja2}";
        }

        return $string;
    }

}

class CetakInfoPegawai {

    public function getInfo ( Pegawai $pegawai ){

        $string = "{$pegawai->nama} | {$pegawai->umur}, {$pegawai->getPegawai()}";

        return $string;
    }
}


$pegawai1 = new Pegawai("Diar", "25 Tahun", "QA Engineer", "Depok", "Karyawan Tetap", null, "Pegawai Kantor");
$pegawai2 = new Pegawai("Ardiansyah", "22 Tahun", "Staff", "Bogor", null, "Kontrak", "Guru Honorer");


echo $pegawai1->getAllInfo();
echo "<hr>";
echo $pegawai2->getAllInfo();

