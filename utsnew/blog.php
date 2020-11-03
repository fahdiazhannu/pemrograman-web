  <?php 
      include_once "header.php";
      include_once "koneksi.php";
    ?>
     <section class="resume-section" id="education">
      <div class="resume-section-content">
         <h1 class="mb-3">BLOG</h2>
          
            
    <?php
    //buat sql
    $strSQL = "SELECT * FROM blog";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {
      echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>
            <div class="flex-grow-1">
             <a href="lihatblog.php?id=<?php echo $row["id"]?>""><h3 class="mb-0"><?php echo $row["judul_blog"] ?></h3></a>
              <div class="subheading mb-1">Posted By <?php echo $row["author"] ?> on <?php echo $row["tgl_blog"] ?></div>
            </div>

    <?php 
      }
    }
    ?>
        </div>
      </div>
    </div>
   
</body>
</html>