
    <?php
    include_once 'koneksi.php';
    include_once 'header.php';
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM about WHERE id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <div class="container">
        <form id="myform" method="post" action="proses_profil.php">
                <div class="form-group">         
                    <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>">
                </div>
                <div class="form-group"> 
                    <label>Nama</label>   
                     <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Umur</label>   
                     <input type="number" class="form-control" name="umur" value="<?php echo $d['umur']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Email</label>   
                     <input type="text" class="form-control" name="email" value="<?php echo $d['email']; ?>">
                 </div>
                 
                 <div class="form-group"> 
                    <label>Nomor Telepon</label>   
                     <input type="text" class="form-control" name="no_telp" value="<?php echo $d['no_telp']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Instagram</label>   
                     <input type="text" class="form-control" name="instagram" value="<?php echo $d['instagram']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Deskripsi</label>   
                     <textarea class="ckeditor" name="deskripsi" value="<?php echo $d['deskripsi']; ?>"></textarea>
                 </div>
                    <input type="submit" class="btn btn-primary">    
        </form>
    </div>
        <?php 
    }
    ?>
 
</body>
</html>