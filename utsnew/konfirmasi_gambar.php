
<body>
<?php
    include_once "koneksi.php";
    include_once "header.php";
    if (isset($_POST['tombolSubmit'])) {
        $gambar = $_POST['gambar'];

        $sql = "INSERT INTO gallery (gambar)
        VALUES ('$gambar')";

        if (mysqli_query($conn, $sql)) {
        header('Location: list_gallery.php?status=sukses');
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
