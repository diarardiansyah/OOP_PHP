<?php

class Angka {

    public static $nomor = 1;

    public static function test() {
        return "Halo Dunia ". self::$nomor++ . " kali <br>";
    }
}

echo Angka::$nomor;
echo "<hr>";
echo Angka::test();
echo Angka::test();
echo Angka::test();

echo "<hr>";
echo Angka::test();
echo Angka::test();
echo Angka::test();


// class Angka { 

//     public static $nomor = 1;

//     public function test() {
//         return "Hello world " . self::$nomor++ . " kali <br>";
//     }
// }

// $nmr = new Angka;
// echo "<hr>";
// echo $nmr->test();
// echo $nmr->test();
// echo $nmr->test();

// echo "<hr>";
// $nmr2 = new Angka;
// echo $nmr2->test();
// echo $nmr2->test();
// echo $nmr2->test();

// echo "<hr>";
// $nmr3 = new Angka;
// echo $nmr3->test();
// echo $nmr3->test();
// echo $nmr3->test();
