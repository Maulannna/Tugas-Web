<?php
require_once "MoConst.php";

$mobilsatu = new Mobil1("Avanza","Toyota");
$mobilsatu->tahun =2019;

$mobildua = new Mobil1("Brio","Honda");
$mobildua->tahun = 2020;

echo $mobilsatu->infoMobil(). PHP_EOL;
echo $mobildua->infoMobil();
?>