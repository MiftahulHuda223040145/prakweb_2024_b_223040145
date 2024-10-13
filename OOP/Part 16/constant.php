<?php

// define('NAMA', 'Miftahul Huda'); // (name, value) //define adalah constanta global maka disimpan diluar kelas 
// echo NAMA;

// echo "<br>";

// const UMUR = 32; //constanta yang bisa disimpan didalam kelas
// echo UMUR;

// class Coba {
//     const NAMA = 'Miftahul Huda';
// }

// echo Coba::NAMA;

// echo __FILE__; // contoh Magic Constant, __FILE__ ini untuk mengetahui alamat file

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public  $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

/*
    - Constant adalah sebuah identifier untuk menyimpan nilai
    - Variable dengan Constant sama untuk menyimpan nilai tapi ada yang membedakan dari keduanya
    - seperti namanya constant, constant ini nilainya tidak dapat berubah berbeda dengan variable
*/
