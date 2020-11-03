<?php 
      include_once "header.php";
      include_once "koneksi.php";
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <h1>EDIT GALLERY</h1>
        </div>
      </div>
        <div class="row mb-3 mt-3">
        <div class="col-md-12">
        <a href="input_gambar.php" class="btn btn-primary">Input Gambar</a>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <table id="listtable" class="table table-hover">
          <thead>
            <tr>
              <th>Id Gambar</th>
              <th>Gambar</th>
              <th>Tombol Aksi</th>
            </tr>
          </thead>
          <tbody>
    <?php
    //buat sql
    $strSQL = "SELECT * FROM gallery";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {
      echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>
            <tr>
              <td><?php echo $row["id"] ?></td>
              <td><?php 
              echo '<img src="img/'.$row['gambar'].'" alt="" width="166"></a>' ?></td>
              <td>
                <a href="delete_foto.php?id=<?php echo $row["id"]?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
    <?php 
      }
    }
    ?>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#listtable').DataTable();
    } );
    </script>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  