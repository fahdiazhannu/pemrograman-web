<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
          <!-- Custom styles for this template -->
        <link href="css/business-frontpage.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
        <script src="assets/ckeditor/ckeditor.js"></script>
        <script src="assets/ckeditor/config.js"></script>
        <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
        <Script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></Script>

    </head>



<?php

include "koneksi.php";
$query="SELECT * FROM about ";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) < 0) {
  echo "<tr><td colspan='4'>Data profil tidak terdapat pada database</td></tr>";
}
else {
 while($row =mysqli_fetch_assoc($result)){

?>

    <body id="page-top" style="background-image: url('img/jumbo-bg.jpg');">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="sideNav" style="background-image: url('img/jumbo-bg2.jpg');">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                 <span class="d-block d-lg-none">Fahdi Azhannu</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/logo.png" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Tentang Saya</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="edu.php">Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="blog.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contact.php">Hubungi Saya</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="admin.php">Halaman Admin</a></li>
                </ul>
            </div>
        </nav>

    <?php
}
}
