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
    <script src="assets/js/script.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.css">
    <script type="text/javascript" src="assets/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/js/dataTables.bootstrap4.js"></script>


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
                        <a class="nav-link" href="index.php">Home</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="daftar.php">Pendaftaran</a>
                      </li>
                     <li class="nav-item active">
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
              <h1 class="display-5 header">Data Pendaftar</h1>

              <center>
              <div class="col-md-3">
              <select class="form-control" id="getDaftar"> 
              <option value="show-all" selected="selected">Pilihan Pendaftar</option>
              <option value="PG Kecil">PG Kecil</option>
              <option value="PG Besar">PG Besar</option>
              <option value="TK A">TK A</option>
              <option value="TK B">TK B</option>
              </select>
              </div>
              </center><br>
      
      
       <div id="pendaftar">
       </div>
      

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