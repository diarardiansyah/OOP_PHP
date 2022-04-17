<?php

// define( 'NAMA', 'Diar' );
// echo NAMA;

// const NAMA = 'Ardiansyah';
// echo NAMA;

// class Coba { 

//     const NAMA = "Diar Ardiansyah";

//     public function test() {
//         return " Umur 25 Tahun";
//     }
// }

// echo Coba::NAMA;
// echo Coba::test();


class Coba {

    private $nama,
            $domisili;
    
    const JENIS_KELAMIN = "Laki - Laki";
    
    public function __construct( $nama = "nama", $domisili = "domisili"){
        $this->nama = $nama;
        $this->domisili = $domisili;
    }

    public function setNama( $nama ) {
        $this->nama = $nama;
    }

    public function getData() {
        return "{$this->nama} , {$this->domisili} | ";
    }
}

$nama1 = new Coba("Diar", "Depok");

echo $nama1->getData();
echo Coba::JENIS_KELAMIN;

echo "<hr>";
echo $nama1->setNama("Ardiansyah");
echo $nama1->getData();
echo Coba::JENIS_KELAMIN; 




