<?php 

    // define('NAMA', 'RAYHAN ALFA REZKI'); //usahain konstanta tulisnya kapital smua

    // echo NAMA; //utk manggil diluar kelas

    // echo"<br>";

    // const UMUR = 32; //cara lain buat constanta
    // echo UMUR;

    //pake define g bisa diseimpen dalam kelas
    //const bisa, bisa buat OOP

    class Coba{
        const NAMA = 'Alfa';
    }

    echo Coba::NAMA; //capa pangggil constanta didalem kelas

    //magic constant
    //constanta yg automatis dibuatin PHP
    //__LINE__, __FILE__, __DIR__, __FUNCTION__, __CLASS__, __TRAIT__
    //__METHOD__, __NAMESPACE__


?>