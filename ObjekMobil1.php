<?php
require_once "Mobil.php";
require_once "MobilSport.php";

$avanzaa = new Mobil1("Avanza","Toyota", 2020);
echo $avanzaa->infoMobil();
echo "<br>";
echo "<br>";

$supra = new MobilSport("Supra","Toyota", 2021);
echo $supra->infoMobiS();
echo "<br>";
echo $supra->jalankanturbo();
?>