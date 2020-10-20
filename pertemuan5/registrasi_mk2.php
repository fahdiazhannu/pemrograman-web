<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mata Kuliah</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
crossorigin="anonymous">
</head>
<body>
    <?php
            $status = 1; //tidak sukses
            include_once "koneksi.php";
        if (isset($_POST['submit'])){
            $kd_matkul = $_POST['kd_matkul'];
            $nm_matkul = $_POST['nm_matkul'];
            $kategori =  $_POST['kategori'];
            $sks      =  $_POST['sks'];
            $sstrql="INSERT INTO matkul (kd_matkul, nm_matkul, kategori, sks)
            VAlUES ('$kd_matkul','$nm_matkul','$kategori','$sks')";
        }
    ?>
    <div class="container">
        <h2>Pendaftaran Mata Kuliah</h2>
<div class="container">
    <h2>Pendaftaran Mata Kuliah versi 2 (dg Modal)</h2>

<!-- Ini Modal -->
    <div class="modal" id="pesan">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--- Ini Header -->
                <div class = "modal-header">
                    <h4 class ="modal-title"> Konfirmasi Pendaftaran</h4>
                    <btutton type="buton" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- body -->
                <div class="modal-footer">
                    isi dari <body>
                </div>

                <!-- footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


<!-- ini end modal -->


                    </body>

    <form method="post" action="registrasi_mk.php">
        <div class="form-group">
        <label>Kode Mata Kuliah</label>
        <input class="form-control" type="text" name="kd_matkul"><br>
        </div>

        <div class="form-group">
        <label>Nama Mata Kuliah</label>
        <input class="form-control" type="text" name="nm_matkul"><br>
        </div>
        
        <div class="form-group">
        <label>Kategori Mata Kuliah</label>
       <select name="kategori" class="form-control">
       <option value="pilih">Pilih</option>
       <option value="MKMA">Mata Kuliah Major</option>
       <option value="MKMI">Mata Kuliah Minor</option>
       <option value="MKPIL">Mata Kuliah Pilihan</option>
       </select>
       </div>
       <div class="form-group">
       <label>SKS</label>
       <input class="form-control" type="text" name="sks">
       <div>
       <br>
            <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Simpan">
        </form>
   
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" 
        crossorigin="anonymous"></script>
        <script>
        $('#pesan').modal({
        show: true
        });
        </script>
</body>
</html>