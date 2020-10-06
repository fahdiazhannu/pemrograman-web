<?php

if (isset($_POST['tombolSubmit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "anto" && $password == "123"){
        echo "Ini sesi anto";
    }
    else{
        echo "Username / Password salah";
    }
}
else {
    echo "mohon maaf cek login tidak bisa diakses langsung";
}
?>