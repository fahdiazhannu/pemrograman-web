<?php
include("koneksi.php");

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $nama_pdk = $_POST['nama_pdk'];
    $jurusan = $_POST['jurusan'];
    $tahun_pdk = $_POST['tahun_pdk'];

    $strsql = "UPDATE pendidikan SET nama_pdk='$judul_blog', jurusan='$jurusan', tahun_pdk='$tahun_pdk' WHERE id='$id'";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: list_pendidikan.php?status=sukses');
    } else {
        die("Location: listpendidikan.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}