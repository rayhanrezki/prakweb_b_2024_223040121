<?php 

    class Produk{
        //properti dari class produk
        public $judul = "Judul",//value
                $penulis = "Penulis",
                $penerbit = "Penerbit",
                $harga;

        //methode = function yang ada didalam kelas
        public function sayHello(){
            return "Hello World";
        }

        public function getLabel(){
            return "$this->penulis, $this->penerbit"; //this-> diperlukan agar properti fungsi dapat mengakses properti di kelas

        }
            
    }

    $produk1 = new Produk(); //objek produk1 yang merupakan instance dari Kelas Produk
    $produk1->judul = "Naruto"; //value dari properti juful di overwrite oleh produk1
    var_dump($produk1);//properti yang belum diisi masih sama seperti default yang di tetapkan di properti

    $produk2 = new Produk();
    $produk2->judul = "Uncharted"; //judul ttp  muncul uncharted, krna properti kelas menjadi properti objek
    //$produk2->tambahProperty = "haha"; //kalo g ada properti di kelas maka nambah properti sendiri
    var_dump($produk2);

    $produk3 = new Produk();
    $produk3->judul = "Naruto";
    $produk3->penulis = "masashi Kisimoto";
    $produk3->penerbit = "Shonen Jump";
    $produk3->harga = 30000;

    echo "komik : $produk3->penulis, $produk3->penerbit";
    echo "<br>";

    echo $produk3->sayHello(); //cara memanggil methode bukan properti (menampilkannya pakai echo)

    echo $produk3->getLabel(); 

    $produk4 = new Produk();
    $produk4->judul = "uncharted";
    $produk4->penulis = "Neil Druckmann";
    $produk4->penerbit = "Sony Computer";
    $produk4->harga = 250000;

    echo "Komik : " . $produk3->getLabel(); //isi dari methode sesuai dengan properti objek masing masing
    echo "<br>";
    echo "Game : " . $produk4->getLabel();

?>