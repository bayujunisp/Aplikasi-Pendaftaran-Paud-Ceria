<!DOCTYPE html>
<?php 
include('koneksi/config.php');
// mengaktifkan session php
session_start();
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>


    <title>Paud Ceria</title>
</head>
<body>
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container">
                  <a class="navbar-brand" href="index.php"> <img src="assets/img/paud.png" width="50px" height="50px"> Paud Ceria </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="index.php">Home
                              <span class="sr-only">(current)</span>
                            </a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="daftar.php">Pendaftaran</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pendaftar.php">Data Pendaftar</a>
                      </li>
                      <li class="nav-item">
                       <button type="button" id="btn_login" class="btn btn-primary" data-toggle="modal" data-target="#login">Login</button>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>


        

              <div class="container pendaftaran">
              <h1 class="display-5 header">Daftar Akun</h1>

              <?php 

              $query_pengaturan = mysqli_query($koneksi,"SELECT*FROM tbl_pengaturan");
              $data_pengaturan = mysqli_fetch_array($query_pengaturan);
              $status_daftar = $data_pengaturan['status_daftar']; 
              if ($status_daftar == 'Tutup') {
                
               ?>

              <div class="jumbotron">
    
                <h1 class="mt-4" align="center">Maaf Pendaftaran Paud Ceria Telah Ditutup</h1>
                <h5 class="mt-4" align="center">Untuk Melihat Data Pendaftar Silahkan Cek di</h5>
               <center><a href="pendaftar.php" class="btn btn-primary">Data Pendaftaran</a></center> 
              </div>

              <?php }else{ ?>
      <div class="jumbotron">
        <form method="POST" action="insert_daftar.php">

          <div class="form-group">
            <label for="exampleInputEmail1">NIK Anak</label>
            <input type="text" class="form-control" name="nik" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIK Anak" required="required">
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Anak</label>
            <input type="name" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pendaftar" required="required">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required="required">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Pilihan Pendaftaran</label>
              <div class="radio">
                <label><input type="radio" name="pilihan" value="PG Kecil"> PG Kecil</label>
              </div>
             <div class="radio">
                <label><input type="radio" name="pilihan" value="PG Besar"> PG Besar</label>
             </div>
             <div class="radio">
                <label><input type="radio" name="pilihan" value="TK A"> TK A</label>
             </div>
             <div class="radio">
                <label><input type="radio" name="pilihan" value="TK B"> TK B</label>
             </div>
          </div>
          
        
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>

        <?php } ?>
    </div>
              

             

<div id="footer">
   <h5>&copy;2018 Copyright @bayujunisp & @rainhardevans</h5>
</div>

    
</body>
</html>

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      <h2 align="left">Login</h2>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>

      <div class="modal-body">
      <div id="content"></div>
      </div>

      <div class="modal-footer">
        <a class="btn btn-md btn-primary" href="#" data-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  
  $("#btn_login").click(function(){
    $("#content").load("login.php");    
});

</script>

<?php 
include 'login/otentikasi.php';
 ?>
