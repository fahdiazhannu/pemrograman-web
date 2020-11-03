  <?php 
      include_once "header.php";
      include_once "koneksi.php";
    ?>
     <section class="resume-section" id="education">
      <div class="resume-section-content">
         <h1 class="mb-3">PENDIDIKAN</h2>
          
            
    <?php
    //buat sql
    $strSQL = "SELECT * FROM pendidikan";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {
      echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>
            <div class="flex-grow-1">
             <h3 class="mb-0"><?php echo $row["nama_pdk"] ?></h3>
              <div class="subheading mb-1"><?php echo $row["jurusan"] ?></div>
                <h5 class="mb-2"><?php echo $row["tahun_pdk"] ?></h5>
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