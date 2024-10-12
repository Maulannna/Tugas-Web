<?php
class Mobil1{
    var string $nama;
    var string $brand;
    var int $tahun;

    function __construct(string $nama, string $brand, int $tahun){
        $this->nama = $nama;
        $this->brand = $brand;
        $this->tahun = $tahun;
    }

    function infomobil(){
        return "Nama Mobil : $this->nama". PHP_EOL ."<br>"
                . "Brand : $this->brand". PHP_EOL ."<br>"
                . "Tahun : $this->tahun". PHP_EOL;    
            }
}
?>