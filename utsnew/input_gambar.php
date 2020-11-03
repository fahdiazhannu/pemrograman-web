<?php 
include_once "koneksi.php";
include_once "header.php";
?>
<div class="container">
 <form method="post" action="konfirmasi_gambar.php">
            <div class="form-group">
                <label>Upload Foto</label>
                <input class="form-control" type="file" name="gambar">
            </div>
                <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Input">   
        </form>
</div>