<?php include "header.php"
?>

<?php

include "koneksi.php";
$query="SELECT * FROM about";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) < 0) {
  echo "<tr><td colspan='4'>Data profil tidak terdapat pada database</td></tr>";
}
else {
 while($row =mysqli_fetch_array($result)){

?>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                  <h1>Hubungi Saya</h1>
                    <div class="social-icons">
                        <a class="social-icon" href="#"><i class="fab fa-google"></i></a><?php echo $row["email"]?>
                        <br><br>
                        <a class="social-icon" href="#"><i class="fab fa-instagram"></i></a><?php echo $row["instagram"]?>
                        <br><br>
                        <a class="social-icon" href="#"><i class="fa fa-phone"></i></a><?php echo $row["no_telp"]?><br><br>
                    </div>
                </div>
            </section>
            <?php
        }
    }
    ?>
            <hr class="m-0" />
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
