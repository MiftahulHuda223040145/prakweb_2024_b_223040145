<?php

// class ContohStatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "Halo." . self::$angka++ . "kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh {
    public static $angka = 1;

    public static function halo() {
        return "Halo." . self::$angka++ . "kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

/*
    Static Keyword
    - Member yang terikat dengan class, bukan dengan object
    - Nilai static akan selalu tetap walaupun object di-instansiasi berulang kali
    - Membuat kode menjadi 'procedural' atau langsung memanggil property dan method tanpa instansiasi
    - Biasanya digunakan untuk membuat fungsi bantuan/helper karena langsung memanggil property atau method
    - Atau digunakan di class-class utility pada Framework
*/