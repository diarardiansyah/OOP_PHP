<?php

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