<?php

class Game extends Produk implements InfoProduk{
    public $waktuMain;
    public function __construct( $judul,$penulis,$penerbit,$harga,$waktuMain = 0 ){
        parent::__construct( $judul,$penulis ,$penerbit,$harga,$waktuMain);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk(){
        return "Game : " . $this->getInfo() . " - {$this->waktuMain} jam";
    }
    public function getInfo(){
        return "{$this->judul} | {$this->getLabel()} (RP.{$this->harga})";
    }

}
?>