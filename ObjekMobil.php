<?php

//include class Mobil.php
require_once "Mobil.php";

//inisialisasi variabel (objek) mobilSatu
$mobilsatu = new mobil();

//menampilkan informasi objek
//var_dump($mobilsatu);

//menambah properties objek
$mobilsatu->nama = "Avanza";
$mobilsatu->merk = "Toyota";
$mobilsatu->warna= null;
$mobilsatu->tahun= "2019";
$mobilsatu->kecepatanmaksimal = 1300;

//menampilkan infoemasi objek
echo " Nama : $mobilsatu->nama". PHP_EOL ."<br/>";
echo " Merk : $mobilsatu->merk" . PHP_EOL ."<br/>";
echo " Warna : $mobilsatu->warna" . PHP_EOL ."<br/>";
echo " Tahun : $mobilsatu->tahun" . PHP_EOL ."<br/>";
echo " Kecepatan Maksimal : $mobilsatu->kecepatanmaksimal" . PHP_EOL ."<br/>";

//mengakses function/method
$mobilsatu->tambahKecepatan();
echo "<br/>";
$mobilsatu->infomobil(null);
echo "<br/>";

//memanggil dan menampilkan constant
echo mobil::AUTHOR;

echo "<br/>";
echo "<br/>";

$mobildua = new mobil();

//menambah properties objek
$mobildua->nama = "Brio";
$mobildua->merk = "Honda";
$mobildua->warna= "Merah";
$mobildua->tahun= "2018";
$mobildua->kecepatanmaksimal = 1000;

//menampilkan infoemasi objek
echo " Nama : $mobildua->nama". PHP_EOL ."<br/>";
echo " Merk : $mobildua->merk" . PHP_EOL ."<br/>";
echo " Warna : $mobildua->warna" . PHP_EOL ."<br/>";
echo " Tahun : $mobildua->tahun" . PHP_EOL ."<br/>";
echo " Kecepatan Maksimal : $mobildua->kecepatanmaksimal" . PHP_EOL ."<br/>";


?>
