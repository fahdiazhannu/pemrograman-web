<?php

if (isset($_POST['registerbtn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $namaDepan = $_POST['namaDepan'];
    $namaBelakang = $_POST['namaBelakang'];

    echo $username;
    echo "<br>" .$email;
    echo "<br> ".$namaDepan." ".$namaBelakang;
}


?>