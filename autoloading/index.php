<?php
require_once 'App/init.php';

$produk1 = new Komik("Naruto","Mashashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted","Neil Duckman", "Sony Computer", 50000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
// $produk3 = new Komik("One Piece");   
?>