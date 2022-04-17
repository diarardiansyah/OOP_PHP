<?php

spl_autoload_register( function ( $class ) 
{
    // App\Pegawai\User = ["App", "Pegawai", "User"]
    $class = explode("\\", $class); // <- lokasi file akan dipecah menjadi sebuah array, dan hanya diambil index paling belakang dari sebuah array yaitu nama class nya.
    $class = end($class);
    require_once __DIR__ . '/Pegawai/' . $class . '.php';
});

spl_autoload_register( function ( $class ) 
{
    // App\Pegawai\User = ["App", "Pegawai", "User"]
    $class = explode("\\", $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' . $class . '.php';
});