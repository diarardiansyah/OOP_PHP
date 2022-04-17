<?php

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