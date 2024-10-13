<?php 

    //interface g bole punya property, implementasi mmethod. cuman boleh deklarasi method saja

    interface InfoProduk{
        public function getInfoProduk(); //jadi interface
    }

    abstract class Produk{ //g bole jadi abstract class nya krna getInfoProduk jadi interface bukan abstract method
        protected $judul, //ganti jadi protected biar bisa dipake ke kelas turunan
                $penulis,
                $penerbit,
                $harga,
                $diskon = 0;
               
                
         public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){ //agar di objek tinggal panggil fungsi dan isi parameter
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        //setter
        public function setjudul($judul){ 
            $this->judul = $judul;
        }
        public function setPenulis($penulis){ 
            $this->penulis = $penulis;
        }
        public function setPenerbit($penerbit){ 
            $this->penerbit = $penerbit;
        }
        public function setHarga($harga){
            $this->harga = $harga;
        }
        public function setDiskon($diskon){
            $this->diskon = $diskon;
        }
        

        //getter krna private
        public function getJudul(){
            return $this->judul;
        }
        public function getPenulis(){
            return $this->penulis;
        }
        public function getPenerbit(){
            return $this->penerbit;
        }
        public function getHarga(){
            return $this->harga - ($this->harga * $this->diskon / 100);
        }
        public function getDiskon(){
            return $this->diskon;
        }

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }

            
        abstract public function getInfo();
        //diubah jadi abstract biar kelasnya bisa jadi kelas abstract
        //method nya dipindahin ke tiap kelas turunan

    }



    class Komik extends Produk implements InfoProduk{ //kalo ada interface tambahin implements aja
        public $jumlahHalaman;

        public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
            parent::__construct($judul, $penulis, $penerbit, $harga);
            
            $this->jmlHalaman = $jmlHalaman;
        }
        
        public function getInfoProduk(){ //fungsi harus ada di tiap turunan class, karena getInfoProduk diubah jadi interface
            $str = "Komik : " . $this->getInfo() . " ~ {$this->jmlHalaman} Halaman";
                                     //cara panggil method abstract di parent class  ($this->method()) 
            return $str;
        }

        public function getInfo(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }
    }

    class Game extends Produk implements InfoProduk{
        public $waktuMain;

        public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
            parent::__construct($judul, $penulis, $penerbit, $harga);
        
            $this->waktuMain = $waktuMain;
        }

        
        public function getInfoProduk(){
            $str = "Game : " . $this->getInfo() . "~ {$this->waktuMain} Jam";
            return $str;
        }

        public function getInfo(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }

    }

    class CetakInfoProduk{
        public $daftarProduk = [];//array

        public function tambahProduk(Produk $produk){
            $this->daftarProduk[] = $produk;
        }

        public function cetak(){
            $str  = "DAFTAR PRODUK : <br>";

            foreach($this->daftarProduk as $p){
                $str .="- {$p->getInfoProduk()} <br>";
            };
            return $str;
        }
    }

    //kalo pake cara dibawah, bisa instansiansi class produk

    $produk1 = new Komik("Naruto", "Masashi Kishimoto",  "Shonen Jump", 30000, 100);
    $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer",  250000, 50);

    $cetakProduk = new CetakInfoProduk();
    $cetakProduk->tambahProduk($produk1);
    $cetakProduk->tambahProduk($produk2);
    echo $cetakProduk->cetak();


?>