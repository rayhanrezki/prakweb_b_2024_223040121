<?php

// class ContohStatic{
//     public static $angka = 1; //properti statis

//     public static function halo(){ //methode statis
//         return "Halo ." . self::$angka++ . " kali . "; //kalo mau manggil $angka
//     }                                  //++ cuman nambah value angka 1
// }

// echo ContohStatic::$angka; // utk memanggil angka (static)
// echo "<br>";
// echo ContohStatic::halo(); //tinggal panggil class::properti/methode

// echo "<hr>";
// echo ContohStatic::halo();

class Contoh
{
    public static $angka = 1;

    public function halo()
    {
        return "Halo " . self::$angka++ . "Kali";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh; //kalo static obj2 akan ngelanjutin obj1
echo $obj2->halo(); //hasil disini 4
echo $obj2->halo(); //kalo OOP biasa, obj2 akan itung dari 1 lagi
echo $obj2->halo();
