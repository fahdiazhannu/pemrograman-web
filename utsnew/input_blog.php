<?php include "header.php"?>
<body>
    <div class="container">
        <h2>Input Blog</h2>
        <form method="post" action="konfirmasi_blog.php">
            <div class="form-group">
                <label>Judul Artikel</label>
                <input class="form-control" type="text" name="judul_blog">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input class="form-control" type="text" name="author">
            </div>
            <div class="form-group">
                <label>Tanggal Upload</label>
                <input class="form-control" type="date" name="tgl_blog">
            </div>
            <div class="form-group"> 
                    <label>Isi Blog</label>   
                     <textarea class="ckeditor" name="isi_blog" value="<?php echo $d['isi_blog']; ?>"></textarea>
                 </div>
                <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Input">   
        </form>
    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>