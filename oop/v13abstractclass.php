<?php

/*Kelas Bstract
 * sbagai kerangka dasar kelas turunan
 * minimal 1 method abstract
 * dipake dlm inheritence uth maksain implementasi method abstrak yg sama ke semua kelas turunan
 * kelas turunan harus mengimplementasikan method abstract di parentnya
 * kelas abstrak bole ada property/method reguler
 * sma boleh punya static method
 */

//contoh non abstrak
//  class Buah{
//     private $warna;

//     public function makan(){
//         //kunyah
//         //nyam nyam nyam
//     }

//     public function setWarna($warna){
//         $this->warna = $warna;
//     }
//  }

//  class Apel extends Buah{
//     public function makan(){
//         //kunyah
//         //nyam nyam nyam
//     }
//  }

//  class Jeruk extends Buah{
//     public function makan(){
//         //kupas
//         //kunyah
//     }
//  }

//  $apel = new Apel();
//  $apel->makan();      //kalo ini kan jelas buah apel rasanya apel

//  $buah = new Buah();//kalo ini kan g tau buah apa? rasanya gmn?
//  $buah->makan();     //jadi g perlu di instansiansi
//jadi perlu menerapkan kelas abstrak

//contoh kelas abstrak
abstract class Buah
{
    private $warna;

    abstract public function makan(); //method abstrak
    //imlementasinya di kelas turunan

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }
}
