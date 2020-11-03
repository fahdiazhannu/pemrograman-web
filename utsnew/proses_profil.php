<?php
include("koneksi.php");

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $email = $_POST['email'];
    $deskripsi = $_POST['deskripsi'];
    $no_telp = $_POST['no_telp'];
    $instagram = $_POST['instagram'];

    $strsql = "UPDATE about SET nama='$nama', umur='$umur', email='$email', deskripsi='$deskripsi', no_telp='$no_telp', instagram='$instagram' WHERE id=$id";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: list_profil.php?status=sukses');
    } else {
        die("Location: list_profil.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}