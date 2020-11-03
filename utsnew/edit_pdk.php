
    <?php
    include_once 'koneksi.php';
    include_once 'header.php';
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM pendidikan WHERE id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <div class="container">
        <form id="myform" method="post" action="proses_pdk.php">
                <div class="form-group">         
                    <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>">
                </div>
                <div class="form-group"> 
                    <label>Nama Sekolah/Perguruan Tinggi</label>   
                     <input type="text" class="form-control" name="nama_pdk" value="<?php echo $d['nama_pdk']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Jurusan</label>   
                     <input type="text" class="form-control" name="jurusan" value="<?php echo $d['jurusan']; ?>">
                 </div>
                <div class="form-group"> 
                    <label>Tahun Pendidikan</label>   
                     <input type="text" class="form-control" name="tahun_pdk" value="<?php echo $d['tahun_pdk']; ?>">
                 </div>

                    <input type="submit" class="btn btn-primary">
                       
        </form>
    </div>
        <?php 
    }
    ?>
 
</body>
</html>