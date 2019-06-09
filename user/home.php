<!DOCTYPE html>
<?php
error_reporting(0);
include '../koneksi/config.php';
include '../login/ceklogin.php';
          session_start();
          $no_pendaftaran = $_SESSION['no_pendaftaran'];
          $query = mysqli_query($koneksi,"SELECT*FROM tbl_daftar where no_pendaftaran = '$no_pendaftaran' ");

          $data = mysqli_fetch_array($query);
        ?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pendaftaran Paud Ceria</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
  
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>


</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Pendaftaran Paud Ceria</div>
      <div class="list-group list-group-flush">
         <a href="home.php" class="list-group-item list-group-item-action bg-info">
         <span class="fa fa-home fa-fw"></span> Beranda</a>
        <a href="profile.php" class="list-group-item list-group-item-action bg-light">
        <span class="fa fa-user fa-fw"></span> Profile</a>
        <a href="formulir.php" class="list-group-item list-group-item-action bg-light">
        <span class="fa fa-pencil-square-o fa-fw"></span> Formulir</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item active">
              <div class="nav-link"><span class="fa fa-home fa-fw"></span>  Beranda</div>
            </li> 
          </ul>

          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            
            <li class="nav-item active">
              <a href="profile.php" class="nav-link">
              <span class="fa fa-user fa-fw"></span>  
              <?php echo $data['nama_pendaftar']; ?></a>
            </li>

             <li class="nav-item active">
              <a href="../login/logout.php" class="nav-link">
              <span class="fa fa-sign-out fa-fw"></span>  Logout</a>
            </li>
          </ul>

        </div>

      </nav>

      <div class="container-fluid">
      <br>
      <div class="jumbotron">
        <h1 class="mt-4">Selamat Datang 


        </h1>
        <p style="font-size: 20px;">Di Website Pendaftaran Paud Ceria</p>
        <p>
        <a href="formulir.php" class="btn btn-primary">Isi Formulir</a>
        <a href="profile.php" class="btn btn-primary">Lihat Profile</a>

         </p>
      
      </div>

      </div>



    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
