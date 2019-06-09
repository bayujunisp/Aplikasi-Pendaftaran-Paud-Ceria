<?php 

include('../koneksi/config.php'); 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
	
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
					<li class="nav-item">
						<a class="nav-link" href="sa_index.php"><span class="fa fa-home fa-fw"></span> Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="sa_tambah.php"><span class="fa fa-plus fa-fw"></span> Tambah</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php"><span class="fa fa-sign-out fa-fw"></span> Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container" style="margin-top:20px">
		<h2>Tambah Admin</h2>
		
		<hr>
		
		
		<?php
		if(isset($_POST['submit'])){
			$nama			= $_POST['nama'];
			$username	= $_POST['username'];
			$password		= $_POST['password'];
			$level		= $_POST['level'];

				$sql = "SELECT id_admin as maxid FROM tbl_admin order by id_admin desc";	
				$hasil = mysqli_query($koneksi,$sql);
				$data  = mysqli_fetch_array($hasil);
				$id_user = $data['maxid'];
				$noUrut = (int) substr($id_user, 2);
				$noUrut++;

				$char = "AD";
				$newID = $char . sprintf("%03s", $noUrut);

				$sql = mysqli_query($koneksi, "INSERT INTO tbl_admin(id_admin, nama, username, password,level) VALUES('$newID', '$nama', '$username', '$password', '$level')") or die(mysqli_error($koneksi));
				
				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="sa_index.php";</script>';
				}else{
					echo '<script>alert("Gagal menambahkan data."); document.location="sa_index.php";</script>';
				}
			
		}
		?>
		
		<form action="sa_tambah.php" method="post">


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-10">
					<input type="text" name="nama" class="form-control" size="4" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Username </label>
				<div class="col-sm-10">
					<input type="text" name="username" class="form-control" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
					<input type="password" name="password" class="form-control"
					required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Level</label>
				<div class="col-sm-10">
					
              <div class="radio">
                <label><input type="radio" name="level" value="admin"> Admin</label>
              </div>
             <div class="radio">
                <label><input type="radio" name="level" value="super_admin"> Super Admin</label>
             </div>
				</div>
			</div>
          

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
				</div>
			</div>
		</form>
		
	</div>

	
</body>
</html>