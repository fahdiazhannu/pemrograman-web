

  <!-- Navigation -->
<?php include "header.php"?>

  <!-- Header -->
  <?php
    include "koneksi.php"
    ?>

  <!-- Page Content -->
 <div class="container body">
    <h2>GALLERY</h2>
    <div class="gal">
      <?php
      $query = $conn->query("SELECT * FROM gallery ORDER BY id DESC") or die($conn->error);
      if($query->num_rows){
        while($row = $query->fetch_assoc()){
          echo '<a href="foto.php?id='.$row['id'].'"><img src="img/'.$row['gambar'].'" alt=""></a>';
        }
      }
      ?>
    </div>
  </div>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
