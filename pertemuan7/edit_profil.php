<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mata Kuliah</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <?php   
    include_once "header.php";
    include_once "koneksi.php"; 
    $status = 2;  
    if (isset($_POST['id'])) {
        
        $id = $_POST['id'];
        $nama = $row["nama"];
        $umur = $row["umur"];
        $_email = $row["email"];
        $_deskripsi = $row["deskripsi"];
        $_no_telp = $row["no_telp"];
        $_instagram = $row["instagram"];


         //buat koneksi
         $strSQL = "UPDATE about SET 
         nama='".$nama."', 
         umur='".$umur."',
         email=".$email."',
         deskripsi=".$deskripsi."',
         no_telp=".$no_telp."',
         instagram=".$instagram." WHERE id='".$id."'";
        // echo $strSQL;
       // die;
         $runSQL = mysqli_query($conn,$strSQL);        
         if ($runSQL) {
             $status = 1; //sukses
         }  
         else {
             $status = 0; //tidak sukses;
         }      
         header("refresh:3; url=listmatakuliah.php"); 
    }        
  else if (isset($_GET['id'])) {
        $_id = $_GET['id'];
        $strSQL = "SELECT * FROM about WHERE id='".$id."'";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData > 0) {
            while ($row = mysqli_fetch_assoc($runStrSQL)) {
                $nama = $row["nama"];
                $umur = $row["umur"];
                $email = $row["email"];
                $deskripsi = $row["deskripsi"];
                $no_telp = $row["no_telp"];
                $instagram = $row["instagram"];
            }
        }
    }  
    else {       
        $namamk = "";
        $kategori = "";
        $sks = "";
        $id = "";
    }  
    $disableForm = isset($_GET['id']) ? "enabled": "disabled";
    ?>
        <div class="container">
        <h2>EDIT PROFIL</h2>   
    <!-- Ini Modal -->
        <div class="modal" id="pesan">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- ini header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Pendaftaran</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- body -->
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-6"><b>Id Profil</b></div>
                                <div class="col-6"><span id="id"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Nama</b></div>
                                <div class="col-6"><span id="nm"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Umur</b></div>
                                <div class="col-6"><span id="umr"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Email</b></div>
                                <div class="col-6"><span id="eml"></span></div>
                            </div>
                          <div class="row">
                                <div class="col-6"><b>Deskripsi</b></div>
                                <div class="col-6"><span id="dsk"></span</div>
                            </div>
                           <div class="row">
                                <div class="col-6"><b>Nomor Telepon</b></div>
                                <div class="col-6"><span id="tlp"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Instagram</b></div>
                                <div class="col-6"><span id="ig"></span></div>
                            </div>
                        </div>
                    </div>

                    <!-- footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Edit</button>
                        <button id="proses" type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
        <h2>Edit Mata Kuliah versi 2 (dg Modal)</h2>   

        <?php 
        include "modalform.php";
            if ($status == 1) {
        ?>    
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data berhasil diinput ke dalam database. Halaman ini akan kembali ke List Mahasiswa dalam 3 detik
            </div>
        <?php 
            }
            else if ($status == 0){
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data tidak berhasil diinput ke dalam database.
            </div>
        <?php 
            }
        
        ?>
         <form id="myform" method="post" action="registrasi_mk2.php">
             <label>Id profil</label>
                <input id="id" class="form-control" type="text" name="id" value="<?php echo $_id ?>">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input id="nama" class="form-control" type="text" name="nama" value="<?php echo $nama ?>">
            </div>
            <div class="form-group">
                <label>Umur</label>
                <input id="umur" class="form-control" type="text" name="umur" value="<?php echo $umur ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input id="email" class="form-control" type="text" name="email" value="<?php echo $email ?>">
            </div>
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input id="no_telp" class="form-control" type="text" name="no_telp" value="<?php echo $no_telp ?>">
            </div>
            <div class="form-group">
                <label>Instagram</label>
                <input id="instagram" class="form-control" type="text" name="instagram" value="<?php echo $instagram ?>">
            </div>
              <div class="form-group">
                <label>Deskripsi</label>
                 <textarea class="form-control" name="deskripsi" id="editor1" rows="10" cols="80" value="<?php echo $deskripsi ?>">
                         </textarea>
                    <script>

                        CKEDITOR.replace( 'editor1' );
                    </script>      
            </div>            
                <input class="btn btn-primary" type="button" id="tombol" value="Simpan">   
        </form>
        
    </div>
    <?php 
    include_once "footer.php";
    ?>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#proses').click(function(){
            $('#myform').submit();
        });
        $('#tombol').click(function(){
            //ambil data dari form
            const id = $('#id').val();
            const nama = $('#nama').val();
            const umur = $('#umur').val();
            const email = $('#email').val();
            const deskripsi = $('#deskripsi').val();
            const no_telp = $('#no_telp').val();
            const instagram = $('#instagram').val();

            $('#id').text(id);
            $('#nm').text(nama);
            $('#umr').text(umur);
            $('#dsk').text(deskripsi);
            $('#tlp').text(no_telp);
            $('#ig').text(instagram);
            $('#umr').text(umur);
            $('#dsk').text(deskripsi);
         
            //buka modal
            $('#pesan').modal({
                show: true
            });
        });
    });
    
    </script>
</body>
</html>