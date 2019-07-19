<?php
//define("NAME",value);
define('NAMA','Hanan Hanafi');

echo NAMA;

const UMUR = 18;

echo UMUR;

// class Coba{
//     const NAMA = "Hanan Hanafi";
// }
// echo "<hr>";
// echo Coba::NAMA;

//magic constant
echo "<br>";
// echo __LINE__;
// echo __FILE__;

function cobaFunction(){
    return __FUNCTION__;
}

echo CobaFunction();

class CobaKelas{
    public $kelas = __CLASS__;
}
$obj = new CobaKelas();
echo $obj->kelas;



?>