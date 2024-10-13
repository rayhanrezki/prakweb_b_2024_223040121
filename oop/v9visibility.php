<?php 

    class Produk{
        public $judul,
                $penulis,
                $penerbit;

        protected $diskon = 0;
        //kalo protected yg bisa pake cuman turunan dan child class
        //panggilnya pakai methode di child class nya
                
        private $harga;
        // kalo private bner bner cuman produk doang yg bisa akses
        //bisa kalo mindahin methode getHarga ke dalem class produk
    
         public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){ //agar di objek tinggal panggil fungsi dan isi parameter
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getHarga(){
            return $this->harga - ($this->harga * $this->diskon / 100);
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
        public $jumlahHalaman; //variabel khusus Class Komik

        public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
            parent::__construct($judul, $penulis, $penerbit, $harga); //default value nya hapus aja biar g kebawa dari yg produk
            //biar g buat construct baru, panggil aja yg punya parent
            
            $this->jmlHalaman = $jmlHalaman;
        }
        //class nyari methode di class sndiri, kalo g ada baru ke parentnya
        public function getInfoProduk(){
            $str = "Komik : " . parent::getInfoProduk() . " ~ {$this->jmlHalaman} Halaman";
                                //biar methode getinfoproduk merujuk ke Class Produ
                                //jadi g muter muter di class Komik
            return $str;
        }
    }

    class Game extends Produk{ //class Game juga jadi Child Classnya Class Produk
        public $waktuMain;

        public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
            parent::__construct($judul, $penulis, $penerbit, $harga);
        
            $this->waktuMain = $waktuMain;
        }

        public function setDiskon($diskon){
            $this->diskon = $diskon;
        }
        
        public function getInfoProduk(){
            $str = "Game : " . parent::getInfoProduk() . "~ {$this->waktuMain} Jam";
            return $str;
        }

    }

    $produk1 = new Komik("Naruto", "Masashi Kishimoto",  "Shonen Jump", 30000, 100);
        //value properti tinggal dimasukkin di parameter tiap objek
    $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer",  250000, 50);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();

    echo "<hr>";

    $produk2->setDiskon(50);
    echo $produk2->getHarga();

?>