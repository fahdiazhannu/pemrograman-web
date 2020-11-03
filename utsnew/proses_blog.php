<?php
include("koneksi.php");

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $judul_blog = $_POST['judul_blog'];
    $author = $_POST['author'];
    $tgl_blog = $_POST['tgl_blog'];
    $isi_blog = $_POST['isi_blog'];


    $strsql = "UPDATE blog SET judul_blog='$judul_blog', author='$author', tgl_blog='$tgl_blog', isi_blog='$isi_blog' WHERE id='$id'";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: list_blog.php?status=sukses');
    } else {
        die("Location: list_blog.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}