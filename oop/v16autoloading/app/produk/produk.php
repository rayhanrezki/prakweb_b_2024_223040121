<?php
abstract class Produk
{
    protected $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    { //agar di objek tinggal panggil fungsi dan isi parameter
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //setter
    public function setjudul($judul)
    {
        $this->judul = $judul;
    }
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    //getter krna private
    public function getJudul()
    {
        return $this->judul;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function getDiskon()
    {
        return $this->diskon;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();
    //diubah jadi abstract biar kelasnya bisa jadi kelas abstract
    //method nya dipindahin ke tiap kelas turunan

}
