<?php

// class ContohStatic {
//     public static $angka = 1;
//     public static function halo() {
//         return "Halo. ". self::$angka++ ."kali";
//     }
// }


// echo ContohStatic::halo();
// echo "<br>";
// echo ContohStatic::halo();
// echo "<br>";
// echo ContohStatic::$angka;

class Contoh {
    public static $angka = 1;
    public function halo() {
        return "Halo " . self::$angka++ . "Kali. <br>";
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