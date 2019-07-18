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

class Komik extends Produk{
    public function getInfoProduk(){
        return "Komik : {$this->judul} | {$this->getLabel()} (RP.{$this->harga}) - $";
    }
}


class Game extends Produk{
    public $waktuMain;
    public function getInfoProduk(){
        return "Game : {$this->judul} | {$this->getLabel()} (RP.{$this->harga}) - $";
    }
}

// class CetakInfoPoduk{
//     public function cetak(Produk $produk){
//         $str = "{$produk->judul} | {$produk->getLabel()} (RP.{$produk->harga})";
//         return $str;
//     }
// }

$produk1 = new Komik("Naruto","Mashashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Game("Uncharted","Neil Duckman", "Sony Computer", 50000);
$produk3 = new Komik("One Piece");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


?> 