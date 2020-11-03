<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Konfirmasi Pendaftaran</title>
</head>
<body>
<?php
    include_once "koneksi.php";
    include_once "header.php";
    if (isset($_POST['tombolSubmit'])) {
        $judul_blog = $_POST['judul_blog'];
        $author = $_POST['author'];
        $tgl_blog = $_POST['tgl_blog'];
        $isi_blog = $_POST['isi_blog'];

        $sql = "INSERT INTO blog (judul_blog, author, tgl_blog, isi_blog)
        VALUES ('$judul_blog','$author','$tgl_blog', '$isi_blog')";

        if (mysqli_query($conn, $sql)) {
        header('Location: list_blog.php?status=sukses');
        }
        else {
            echo "Data tidak berhasil diinput pada string sql: <br>
            $sql <br> dg error: ".mysqli_error($conn);
        }
    
?>
<?php
   }
   else{
    echo "Mohon maaf konfirmasi tidak bs diakses";
   }
?>
</body>
</html>
