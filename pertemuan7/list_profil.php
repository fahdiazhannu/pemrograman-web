<?php 
      include_once "header.php";
      include_once "koneksi.php";
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <h1>LIST MATA KULIAH</h1>
        </div>
      </div>
      <div class="row mb-3 mt-3">
        <div class="col-md-12">
        <a href="registrasi_mk2.php" class="btn btn-primary">Input Data</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <table id="listtable" class="table table-striped">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Umur</th>
              <th>Email</th>
              <th>Deskripsi</th>
              <th>Nomor Telepon</th>
              <th>Instagram</th>
            </tr>
          </thead>
          <tbody>
    <?php
    //buat sql
    $strSQL = "SELECT * FROM about";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {
      echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>
            <tr>
              <td><?php echo $row["nama"] ?></td>
              <td><?php echo $row["umur"] ?></td>
              <td><?php echo $row["email"] ?></td>
              <td><?php echo $row["deskripsi"] ?></td>
              <td><?php echo $row["no_telp"] ?></td>
              <td><?php echo $row["instagram"] ?></td>
              <td>
                <a href="edit_profil.php?id=<?php echo $row["id"] ?>" class="btn btn-info">Edit</a>
                <a href="hapus_mk2.php" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
    <?php 
      }
    }
    ?>
          </tbody>
        </table>
        </div>
      </div>
    </div>