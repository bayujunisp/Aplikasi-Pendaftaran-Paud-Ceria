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
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <title>Paud Ceria</title>
</head>
<body>
    
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container">
                  <a class="navbar-brand" href="#">
                  <a class="navbar-brand" href="index.php"> <img src="assets/img/paud.png" width="50px" height="50px"> Paud Ceria </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                      </li>
                      <li class="nav-item">
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

              <header>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" style="background-color: #000;">
                      <div class="carousel-caption d-none d-md-block">
                        <h3 class="display-4">Selamat Datang Di Website Paud Ceria</h3>
                        <p class="lead">Paud Kepercayaan Orang Tua</p>
                      </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-color: #000;">
                      <div class="carousel-caption d-none d-md-block">
                        <h3 class="display-4">Tempat dimana kita mendidik dan mewujudkan anak Indonesia yang Ceria Sehat, Cerdas, Mandiri</h3>
                        <p class="lead"></p>
                      </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-color: #000;">
                      <div class="carousel-caption d-none d-md-block">
                        <h3 class="display-4">Percayakan Pendidikan Usia Dini Anak Anda Kepada Ahlinya</h3>
                        <p class="lead">Percayakan Pendidikan Usia Dini Anak Anda Kepada Kami</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                </div>
              </header>
        
  <div class="jumbotron">


    <div class="container">
      <h1 class="display-5" text align="center">Apa Itu Paud</h1>
                        <br>
                        <br>
       <img src="assets/img/paud.png" class="mx-auto d-block img-fluid" width="200px" height="200px"> 

      <h5 class="paud" align="justify">
        Pendidikan anak usia dini (PAUD) adalah jenjang pendidikan sebelum jenjang pendidikan dasar yang merupakan suatu upaya pembinaan yang ditujukan bagi anak sejak lahir sampai dengan usia enam tahun yang dilakukan melalui pemberian rangsangan pendidikan untuk membantu pertumbuhan dan perkembangan jasmani dan rohani agar anak memiliki kesiapan dalam memasuki pendidikan lebih lanjut, yang diselenggarakan pada jalur formal, nonformal, dan informal. 
      </h5>
    </div>
</div>

    <div class="container">

      <h1 class="display-5" text align="center">Visi Dan Misi Paud Ceria</h1>
                        <br>
                        <br>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/img/ceria1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-title" align="center">Ceria</h5>
                      <p class="card-text">Menjadikan anak didik menjadi anak yang ceria dan bahagia</p>
                    </div>
                  </div>
                </div>

            <div class="col-md-3">
                <div class="card">
                <br><br>
                    <img src="assets/img/sehat.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-title" align="center">Sehat</h5>
                      <p class="card-text">Menjadikan anak didik menjadi anak yang sehat jasmani maupun rohani</p>
                    </div>
                  </div>
                </div>

            <div class="col-md-3">
                <div class="card">
                    <img src="assets/img/cerdas.png"  class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-title" align="center">Cerdas</h5>
                      <p class="card-text">Menjadikan anak didik menjadi anak yang cerdas dan pintar</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                <div class="card">
                    <img src="assets/img/mandiri.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-title" align="center">Mandiri</h5>
                      <p class="card-text">Menjadikan anak didik menjadi anak yang mandiri sehingga tidak manja</p>
                    </div>
                  </div>
                </div>

        </div>
    </div>

    <br>
    <br>


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