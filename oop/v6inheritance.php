<?php 

    class Produk{
        //properti
        public $judul = "Judul",//value
                $penulis = "Penulis",
                $penerbit = "Penerbit",
                $harga = 0,
                $jmlHalaman = 0, //khusus untuk Komik
                $waktuMain = 0, //Khusus untuk game
                $tipe = "-";

        //constructor
        public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe){ //agar di objek tinggal panggil fungsi dan isi parameter
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
            $this->tipe = $tipe;
        }

        //methode
        public function getLabel(){
            return "$this->penulis, $this->penerbit"; //this-> diperlukan agar properti fungsi dapat mengakses properti di kelas

        }

        public function getInfoProduk(){
            $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} {$this->harga}";
            if($this->tipe =="komik"){//utk ngecek tipe 
                $str .= " - {$this->jmlHalaman} Halaman.";
            }else if($this->tipe == "Game"){//dn nampilin data spesifik sesuai tipenya
                $str .= " - {$this->waktuMain} Jam.";
            }

            return $str;
        }

    } 

    class CetakInfoProduk{
        //methode
        public function cetak(Produk $produk){  //parameter hanya bisa diisi dengan objek Produk
                                                        //menjadikan objek menjadi data type sendiri

            $str  = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
            return $str;
        }
    }

    $produk1 = new Produk("Naruto", "Masashi Kishimoto",  "Shonen Jump", 30000, 100, 0, "Komik");
        //value properti tinggal dimasukkin di parameter tiap objek
    $produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer",  250000,0, 50, "Game");


    echo "Komik : " . $produk1->getLabel();
    echo "<br>";
    echo "Game : " . $produk2->getLabel();

    $infoProduk1 =  new CetakInfoProduk();
    echo $infoProduk1->cetak($produk1);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();

?>