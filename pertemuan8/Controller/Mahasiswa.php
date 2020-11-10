<?php
include "../library/Orang.php";

class Mahasiswa extends Orang {
    //property
    private $nim;
    private $angkatan;
    private $jurusan;
    
    //Constructor
    function Mahasiswa($nim="kosong", $nama="kosong", $jurusan="kosong"){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->umur = $umur;
        $this->angkatan = $angkatan;
        $this->jurusan = $jurusan;
    }

    //Method
    function set_nim($nim){
        $this->nim = $nim;
    }
    function get_nim($nim){
        $this->nim = $nim;
    }
    function set_angkatan($angkatan){
        $this->angkatan = $angkatan;
    }
    function get_angkatan($angkatan){
        $this->angkatan = $angkatan;
    }
    function set_jurusan($jurusan){
        $this->jurusan = $jurusan;
    }
    function get_jurusan($jurusan){
        $this->jurusan = $jurusan;
    }
    function info(){
        echo "Nim : ".$this.nim;
        echo "<br>Nama : ".$this.nama;
        echo "<br>Umur : ".$this.umur;
        echo "<br> Angkatan : ".$this.angkatan;
        echo "<brJurusan : ".$this.jurusan;;
    }
}

?>