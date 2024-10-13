<?php

class Produk
{
    //properti
    public $judul = "Judul", //value
    $penulis = "Penulis",
    $penerbit = "Penerbit",
    $harga = 0;

    //constructor
    public function __construct($judul, $penulis, $penerbit, $harga)
    { //agar di objek tinggal panggil fungsi dan isi parameter
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //methode
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit"; //this-> diperlukan agar properti fungsi dapat mengakses properti di kelas

    }
}

class CetakInfoProduk
{
    //methode
    public function cetak(Produk $produk)
    { //parameter hanya bisa diisi dengan objek Produk
        //menjadikan objek menjadi data type sendiri

        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
//value properti tinggal dimasukkin di parameter tiap objek
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
