<?php 
      include_once "header.php";
      include_once "koneksi.php";
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <h1>List Blog</h1>
        </div>
      </div>
      <div class="row mb-3 mt-3">
        <div class="col-md-12">
        <a href="input_blog.php" class="btn btn-primary">Input Artikel</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <table id="listtable" class="table table-hover">
          <thead>
            <tr>
              <th>Judul</th>
              <th>Author</th>
              <th>Tanggal Upload</th>
              <th>Tombol Aksi</th>
            </tr>
          </thead>
          <tbody>
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
            <tr>
              <td><b><?php echo $row["judul_blog"] ?></b></td>
              <td><?php echo $row["author"] ?></td>
              <td><?php echo $row["tgl_blog"] ?></td>
              <td>
                <a href="edit_blog.php?id=<?php echo $row["id"] ?>" class="btn btn-info"><i class="fa fa-pen"></i></a>
                <a href="delete_blog.php?id=<?php echo $row["id"]?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>

              </td>
            </tr>
    <?php 
      }
    }
    ?>
<!-- modal konfirmasi-->
        <div id="modal-konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Konfirmasi</h4>
                </div>
                <div class="modal-body btn-info">
                    Apakah Anda yakin ingin menghapus data ini ?
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-danger" id="hapus-true-data">Hapus</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>
                 
                </div>
            </div>
        </div>
    <script src="js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/hapus.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>
    <script>
            $(document).ready(function () {
                $(\'#dataTables-example\').dataTable();'
            });
    </script>
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
  