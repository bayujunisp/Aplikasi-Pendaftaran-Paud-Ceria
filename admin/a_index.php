<?php
//memasukkan file config.php
include('../koneksi/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Index</title>
	
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
	<script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>

    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">Paud Ceria</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
 
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="a_index.php"><span class="fa fa-home fa-fw"></span> Home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="a_tampil_daftar.php"><span class="fa fa-user fa-fw"></span> Daftar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="a_pengaturan.php"><span class="fa fa-cog fa-fw"></span> Pengaturan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php"><span class="fa fa-sign-out fa-fw"></span> Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<br>

	<div class="container">
	<div class="jumbotron">
		
		<h1 class="mt-4">Selamat Datang Di</h1>
		<h5 class="mt-4">Halaman Admin Paud Cerita</h5>
		<a href="a_tampil_daftar.php" class="btn btn-primary"><span class="fa fa-user fa-fw"></span> Data Pendaftar</a>
		<a href="a_pengaturan.php" class="btn btn-primary"><span class="fa fa-cog fa-fw"></span> Pengaturan</a>

	</div>
	</div>
	
</body>
</html>