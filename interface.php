<?php

//produk
//komik
//game
interface InfoProduk{
    public function getInfoProduk();
}


abstract class Produk {
    //private = hanya class(parent)
    //protected = parent dan child bisa memanggil propeerty tsb   
    private  $judul,
            $penulis,
            $penerbit,
            $diskon,
            $harga;
    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul){
        if(!is_string($judul)){
            throw new Exception("Judul harus string");
        }else{
            $this->judul = $judul;
        }
    }

    public function getJudul(){
        return $this->judul;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    public function getHarga(){
        return $this->harga - ($this->harga*$this->diskon/100);
    }

    public function setDiskon($diskon = 0){
        $this->diskon = $diskon;
    }

    abstract public function getInfo();
}

class Komik extends Produk implements InfoProduk{
    public $jumlahHalaman;
    public function __construct( $judul,$penulis,$penerbit,$harga,$jumlahHalaman = 0){
        parent::__construct( $judul,$penulis,$penerbit,$harga,$jumlahHalaman );
        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function getInfoProduk(){
        return "Komik : " . $this->getInfo() . " - {$this->jumlahHalaman} halaman";
    }
}

class Game extends Produk implements InfoProduk{
    public $waktuMain;
    public function __construct( $judul,$penulis,$penerbit,$harga,$waktuMain = 0 ){
        parent::__construct( $judul,$penulis ,$penerbit,$harga,$waktuMain);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk(){
        return "Game : " . $this->getInfo() . " - {$this->waktuMain} jam";
    }
}

class CetakInfoPoduk{

    public $daftarProduk = [];

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }

    public function cetak(){
        $str = "Daftar Produk <br>";
        foreach($this->daftarProduk as  $produk){
            $str .= "- {$produk->getInfoProduk()} <br>";
        }
        return $str;
    }
}

$produk1 = new Komik("Naruto","Mashashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted","Neil Duckman", "Sony Computer", 50000, 50);

$cetakProduk = new CetakInfoPoduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
// $produk3 = new Komik("One Piece");


?> 