<?php 
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