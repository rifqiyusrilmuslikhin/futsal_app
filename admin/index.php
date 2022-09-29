<?php 
include "../koneksi/koneksi.php";

session_start();
if (!isset($_SESSION["loginadmin"])){
    echo "<script>  
    alert('Anda Belum Login :) , Silahkan Login dan Dilarang mengakses langsung');  
    window.location = 'login.php';  
    </script>";
  }
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="font-awesome/css/all.min.css">

    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
      <?php include "navbar.php"; ?>
    </nav>

    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4 sidebar">
        <?php include "sidebar.php"; ?>
      </div>
      <div class="col-md-10 p-5 pt-2 main">
        <?php 
          if(isset($_GET['halaman'])){
              $halaman = $_GET['halaman'];
              switch ($halaman) {
                  case 'dashboard':
                      include "dashboard.php";
                      break;
                  case 'pelanggan':
                      include "pelanggan/pelanggan.php";
                      break;
                  case 'tambahpelanggan':
                      include "pelanggan/tambah.php";
                      break;
                  case 'editpelanggan':
                      include "pelanggan/edit.php";
                      break;
                  case 'lapangan':
                      include "lapangan/lapangan.php";
                      break;
                  case 'booking':
                    include "booking/booking.php";
                    break;
                  case 'tambahbooking':
                    include "booking/tambah.php";
                    break;
                  case 'editbooking':
                    include "booking/edit.php";
                    break;
                  case 'formbooking':
                    include "booking/form_booking.php";
                    break;
                  case 'pesanbaru':
                    include "booking/pesanbaru.php";
                    break;
                  case 'admin':
                    include "data_admin/admin.php";
                    break;
                  case 'tambahadmin':
                    include "data_admin/tambah.php";
                    break;
                  case 'editadmin':
                    include "data_admin/edit.php";
                    break;
                  case 'profil':
                    include "data_admin/profil.php";
                    break;
                  case 'pengaturan':
                    include "pengaturan.php";
                    break;
                  default:
                  echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                  break;
              }
          }else {
              include "dashboard.php";
          }
      ?>
      </div>
    </div>  
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript/script.js"></script>
  </body>
</html>