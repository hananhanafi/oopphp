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
}

$produk1 = new Produk("Naruto","Mashashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted","Neil Duckman", "Sony Computer", 50000);
$produk3 = new Produk("One Piece");

var_dump($produk3);
?> 