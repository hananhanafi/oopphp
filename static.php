<?php

class ContohStatic{
    public static $angka = 1;

    public static function halo(){
        return "Halo " . self::$angka . "kali";
    }


}
echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<br>";

class Contoh{
    //static property nilainya akan tetap walaupun di instance objek yang baru
    public static $angka = 1;

    public function halo(){
        return "Halo " . self::$angka++ . "kali <br>";
    }
}

$obj = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";

$obj2 = new Contoh();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();



?>