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
    public function getInfoProduk(){
        return "{$this->judul} | {$this->getLabel()} (RP.{$this->harga})";
    }
}

class Komik extends Produk{
    public $jumlahHalaman;
    public function __construct( $judul,$penulis,$penerbit,$harga,$jumlahHalaman = 0){
        parent::__construct( $judul,$penulis,$penerbit,$harga,$jumlahHalaman );
        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function getInfoProduk(){
        return "Komik : " . parent::getInfoProduk() . " - {$this->jumlahHalaman} halaman";
    }
}

class Game extends Produk{
    public $waktuMain;
    public function __construct( $judul,$penulis,$penerbit,$harga,$waktuMain = 0 ){
        parent::__construct( $judul,$penulis ,$penerbit,$harga,$waktuMain);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk(){
        return "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} jam";
    }
}

// class CetakInfoPoduk{
//     public function cetak(Produk $produk){
//         $str = "{$produk->judul} | {$produk->getLabel()} (RP.{$produk->harga})";
//         return $str;
//     }
// }

$produk1 = new Komik("Naruto","Mashashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted","Neil Duckman", "Sony Computer", 50000, 50);
// $produk3 = new Komik("One Piece");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

?> 