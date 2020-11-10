<?php
class Orang {
    //Property
    private $nama;
    private $umur;

    //Constructor
    function Orang($nama="kosong", $umur="kosong") {
        $this ->nama = $nama;
        $this ->umur = $umur;
    }

    //Method
    function set_nama($nama) {
        $this->nama = $nama;
    }
    function get_nama() {
        return $this->nama;
    }
    function set_umur($umur) {
        $this->umur = $umur;
    }
    function get_umur() {
        return $this->umur;
    }
}

//Object
$objOrg = new Orang();
//Memanggil Object
//$objOrg ->nama = 'Andi';
//echo "Nama = ".$objOrg->nama;
$objOrg->set_nama("Andi");
echo "Nama Lengkap = ".$objOrg->get_nama();
$objOrg->set_umur("20");
echo "Umur = ".$objOrg->get_umur()." tahun";
?>