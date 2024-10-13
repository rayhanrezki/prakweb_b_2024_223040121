<?php 

    class Produk{
        //properti
        public $judul = "Judul",//value
                $penulis = "Penulis",
                $penerbit = "Penerbit",
                $harga = 0;

        //constructor
        public function __construct($judul, $penulis, $penerbit, $harga){ //agar di objek tinggal panggil fungsi dan isi parameter
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        //methode
        public function getLabel(){
            return "$this->penulis, $this->penerbit"; //this-> diperlukan agar properti fungsi dapat mengakses properti di kelas

        }
    }

    $produk1 = new Produk("Naruto", "Masashi Kishimoto",  "Shonen Jump", 30000);
        //value properti tinggal dimasukkin di parameter tiap objek
    $produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer",  250000);
    //$produk3 = new Produk("Dragon Ball");  //yang muncul cuman  judul karena properti lainnya tidak diisi



    echo "Komik : " . $produk1->getLabel();
    echo "<br>";
    echo "Game : " . $produk2->getLabel();

    //var_dump($produk3)

?>