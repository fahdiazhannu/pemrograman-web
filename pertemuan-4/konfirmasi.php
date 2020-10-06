<?php

if (isset($_POST['registerbtn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $namaDepan = $_POST['namaDepan'];
    $namaBelakang = $_POST['namaBelakang'];

    echo "Username : ".$username;
    echo "<br> Email : " .$email;
    echo "<br> Nama Lengkap ".$namaDepan." ".$namaBelakang;
}


?>
