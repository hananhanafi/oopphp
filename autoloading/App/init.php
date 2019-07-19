<?php
// require_once 'produk/InfoProduk.php';
// require_once 'produk/Produk.php';
// require_once 'produk/Komik.php';
// require_once 'produk/Game.php';
// require_once 'produk/CetakInfoProduk.php';

//closure fungsi tanpa nama
spl_autoload_register(function($class){
    require_once  'produk/' . $class . '.php';
});

?>