<?php

class MobilSport extends Mobil1{
     public $turbo = false;

     function jalankanturbo(){
        $this->turbo = true;
        return "Jalankan Turbo!";
     }

     function infoMobiS()
     {
        return "Nama Mobil Sport : $this->nama". PHP_EOL. "<br>."
                . "Brand : $this->brand ". PHP_EOL. "<br>."
                . "Tahun :". $this->tahun . PHP_EOL. "<br>."
                . "Turbo :". $this->turbo = true . PHP_EOL ;
     }
}
?>