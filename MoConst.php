<?php
class Mobil1 {
    var string $nama;
    var? string $merk=null;
    var int $tahun;


    public function __construct(string $nama, ?string $merk){
        $this->nama = $nama;
        $this->merk = $merk;
    }

    public function infoMobil(){
        return "$this->nama, $this->merk, $this->tahun;";
    }
}
?>