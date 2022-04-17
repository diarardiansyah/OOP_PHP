<?php

require_once 'App/init.php';

$pegawai1 = new Kantoran("Diar", "25 Tahun", "QA Engineer", "Depok", 4600000, "Karyawan Tetap");
$pegawai2 = new Guru("Ardiansyah", "22 Tahun", "Staff", "Bogor", "Kontrak");

$cetakInfo = new cetakInfoPegawai();
$cetakInfo->addPegawai( $pegawai1 );
$cetakInfo->addPegawai( $pegawai2 );
echo $cetakInfo->cetakInfo();