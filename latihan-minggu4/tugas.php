<?php
class Perhitungan{
    //function tambah
    function tambah($angka1, $angka2){
        $hasil = $angka1 + $angka2;
        return $hasil;
    }
    //function kurang
    function kurang($angka1,$angka2){
        $hasil = $angka1 - $angka2;
        return $hasil;
    }
     //function bagi
    function bagi($angka1, $angka2){
        $hasil = $angka1 / $angka2;
        return $hasil;
    }
    //function kali
    function kali($angka1, $angka2){
        $hasil = $angka1 * $angka2;
        return $hasil;
    }
}

    $perhitungan = new Perhitungan;
    echo ($perhitungan->tambah(1,2));
    echo ", ";
    echo ($perhitungan->kurang(8,2));
    echo ", ";
    echo ($perhitungan->bagi(10,5));
    echo ", ";
    echo ($perhitungan->kali(2,10));
?>