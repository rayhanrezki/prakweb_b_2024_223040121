<?php 

    class Produk{
        public $judul,
                $penulis,
                $penerbit,
                $harga,
                $jmlHalaman, //khusus untuk Komik
                $waktuMain; //Khusus untuk game
    
         public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0){ //agar di objek tinggal panggil fungsi dan isi parameter
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
        }


        public function getLabel(){
            return "$this->penulis, $this->penerbit"; //this-> diperlukan agar properti fungsi dapat mengakses properti di kelas

        }

        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getLabel()} {$this->harga}";
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

    class Komik extends Produk{ //class Komik udh jadi Child Class nya produk
        //class nyari methode di class sndiri, kalo g ada baru ke parentnya
        public function getInfoProduk(){
            $str = "Komik : {$this->judul} | {$this->getLabel()} {$this->harga} ~ {$this->jmlHalaman} Halaman";
            return $str;
        }
    }

    class Game extends Produk{ //class Game juga jadi Child Classnya Class Produk
        public function getInfoProduk(){
            $str = "Game : {$this->judul} | {$this->getLabel()} {$this->harga} ~ {$this->waktuMain} Jam";
            return $str;
        }
    }

    $produk1 = new Komik("Naruto", "Masashi Kishimoto",  "Shonen Jump", 30000, 100);
        //value properti tinggal dimasukkin di parameter tiap objek
    $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer",  250000, 8);

    
    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();
?>