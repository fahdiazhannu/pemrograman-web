<?php include "header.php"
?>

<?php

include "koneksi.php";
$id= $_GET['id'];
$query="SELECT * FROM blog WHERE id='$id' ";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) < 0) {
  echo "<tr><td colspan='4'>Data profil tidak terdapat pada database</td></tr>";
}
else {
 while($row =mysqli_fetch_assoc($result)){

?>
   
            <!-- Page Content-->
        <div class="container-fluid">
            <!-- About-->
            <section class="resume-section" id="blog">
                <div class="resume-section-content">
                   <h1>BLOG</h1>
                    <h4 class="mb-0">
                       <?php echo $row["judul_blog"]?></h4>
                    <p class="lead mb-0"><?php echo $row["isi_blog"]?></p>
                </div>
            </section>
         <?php
        }
        }
        ?>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
