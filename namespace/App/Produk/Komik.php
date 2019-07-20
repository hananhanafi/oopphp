<?php

class Komik extends Produk implements InfoProduk{
    public $jumlahHalaman;
    public function __construct( $judul,$penulis,$penerbit,$harga,$jumlahHalaman = 0){
        parent::__construct( $judul,$penulis,$penerbit,$harga,$jumlahHalaman );
        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfo(){
        return "{$this->judul} | {$this->getLabel()} (RP.{$this->harga})";
    }


    public function getInfoProduk(){
        return "Komik : " . $this->getInfo() . " - {$this->jumlahHalaman} halaman";
    }
}

?>