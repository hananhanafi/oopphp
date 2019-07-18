<?php

//produk
//komik
//game

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoPoduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (RP.{$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto","Mashashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted","Neil Duckman", "Sony Computer", 50000);
$produk3 = new Produk("One Piece");

$infoProduk1 = new CetakInfoPoduk();
echo $infoProduk1->cetak($produk1);


?> 