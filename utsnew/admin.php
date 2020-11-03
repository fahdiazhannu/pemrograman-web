<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- CSS only -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <?php 
      include_once "header.php";
      include_once "koneksi.php";
    ?>
   <section class="resume-section" id="admin">
      <div class="resume-section-content">
         <h1 class="mb-3">Edit Data</h2>
      <div class="row mb-3 mt-3">
         <div class="col-md-12">
          <a href="list_profil.php" class="btn btn-primary">Edit Profil</a>
          <a href="list_blog.php" class="btn btn-primary">Edit Blog</a>
          <a href="list_pendidikan.php" class="btn btn-primary">Edit Pendidikan</a>
          <a href="list_gallery.php" class="btn btn-primary">Edit Gallery</a>
          </div>
        <br>
        <br>
      </div>
          </tbody>
        </table>
        </div>
      </div>
    </div>
     <!-- JS, Popper.js, and jQuery -->
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
</body>
</html>