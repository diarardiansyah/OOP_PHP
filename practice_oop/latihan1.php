<?php

class Motor {

    public $merk,
           $produsen,
           $tahun_pembuatan,
           $warna,
           $diskon = 0;

    private $harga;
    
    public function __construct($merk = "merk", $produsen = "produsen", $tahun_pembuatan = "tahun pembuatan", $warna = "warna", $harga = 0) 
    {

        $this->merk = $merk;
        $this->produsen = $produsen;
        $this->tahun_pembuatan = $tahun_pembuatan;
        $this->warna = $warna;
        $this->harga = $harga;

    }

    public function setDiskonHarga( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getHargaMotor() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getDataMotor() {

        $string = "{$this->merk}, {$this->produsen}";
        return $string;
    }

    public function getInfoMotor() {
        $string = "{$this->getDataMotor()}, {$this->tahun_pembuatan}, {$this->warna} | ( Rp. {$this->harga} )";
        return $string;
    }

}

class Manual extends Motor {
    
    public $transamisi_motor1;
    
    public function __construct( $merk = "merk", $produsen = "produsen", $tahun_pembuatan = "tahun pembuatan", $warna = "warna", $harga = 0, $transamisi_motor1 = "transamisi motor 1")
    {
        // Load isi dari $this di method construct di class parent
        parent::__construct( $merk, $produsen, $tahun_pembuatan, $warna, $harga );
        
        $this->transmisi_motor1 = $transamisi_motor1;
    }

    public function getInfoMotor() {
        $str = "Motor Transmisi Manual : ". parent::getInfoMotor() . " | {$this->transmisi_motor1}";
        return $str;
    }
}

class Automatic extends Motor {

    public $transmisi_motor2;

    public function __construct ( $merk = "merk", $produsen = "produsen", $tahun_pembuatan = "tahun pembuatan", $warna = "warna", $harga = 0,  $transmisi_motor2 = "transamisi motor 2" ) 
    {
        parent::__construct( $merk, $produsen, $tahun_pembuatan, $warna, $harga);

        $this->transmisi_motor2 = $transmisi_motor2;
    }

    public function getMotorInfo() 
    {
        // Case nama method yang berada di child class berbeda dengan method yang berada di class parent

        $data = "Motor Transmisi Matic : {$this->getInfoMotor()} | {$this->transmisi_motor2}";
        return $data; 
    }
}


$motor1 = new Manual("Yamaha Z1", "Yamaha", "2021", "Putih", 23000000, "Manual");
$motor2 = new Manual("Honda CBR", "Honda", "2020", "Oranye", 30000000, "Manual");
$motor3 = new Automatic("Vario Techno", "Honda", "2021", "Hitam", 20000000,  "Matic");

echo $motor1->getInfoMotor();
echo "<hr>";
echo $motor2->getInfoMotor();
echo "<hr>";
echo $motor3->getMotorInfo();

echo "<hr>";
$motor3->setDiskonHarga(30);
echo "Harga Diskon Motor 3 : " . $motor3->getHargaMotor();