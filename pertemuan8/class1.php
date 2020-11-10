<?php
class Orang{
    //Property
    public $nama;
    public $umur;
}

//Object
$objOrg = new Orang();
//Memanggil Object
$objOrg ->nama = 'Andi';
echo "Nama = ".$objOrg->nama;

?>