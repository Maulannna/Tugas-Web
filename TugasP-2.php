<?php
class Mahasiswa {
    // Properties
    public $nama;
    public $nim;
    public $jurusan;
    public $kelas;

    public function __construct($nama, $nim, $jurusan,$kelas) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->kelas = $kelas;
    }

    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NPM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
        echo "Kelas: " . $this->kelas . "<br>";
    }
}

$mahasiswa1 = new Mahasiswa("Fikri Azka Maulana", "23.240.0021", "Teknik Informatika", "3P41");

$mahasiswa1->tampilkanInfo();
?>
