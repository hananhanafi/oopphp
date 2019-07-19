<?php
abstract class Produk {
    //private = hanya class(parent)
    //protected = parent dan child bisa memanggil propeerty tsb   
    protected  $judul,
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
?>