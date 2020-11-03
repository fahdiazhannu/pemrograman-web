
    <?php
    include_once 'koneksi.php';
    include_once 'header.php';
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM blog WHERE id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <div class="container">
        <form id="myform" method="post" action="proses_blog.php">
                <div class="form-group">         
                    <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>">
                </div>
                <div class="form-group"> 
                    <label>Judul</label>   
                     <input type="text" class="form-control" name="judul_blog" value="<?php echo $d['judul_blog']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Author</label>   
                     <input type="text" class="form-control" name="author" value="<?php echo $d['author']; ?>">
                 </div>
                <div class="form-group"> 
                    <label>Tanggal Blog</label>   
                     <input type="text" class="form-control" name="tgl_blog" value="<?php echo $d['tgl_blog']; ?>">
                 </div>
                 <div class="form-group">
                    <label>Isi Artikel</label>   
                     <textarea class="ckeditor" name="isi_blog" value="<?php echo $d['isi_blog']; ?>"></textarea>
                 </div>
                    <input type="submit" class="btn btn-primary">
                       
        </form>
    </div>
        <?php 
    }
    ?>
 
</body>
</html>