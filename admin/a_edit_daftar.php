<?php 

include('../koneksi/config.php'); 

?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
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
						<a class="nav-link" href="a_index.php"	><span class="fa fa-home fa-fw"></span> Home</a>
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

	<div class="container" style="margin-top:20px">
		<h2>Edit Account</h2>
		
		<hr>

<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['no_pendaftaran'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$no_pendaftaran = $_GET['no_pendaftaran'];
			
			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM tbl_daftar WHERE no_pendaftaran='$no_pendaftaran'") or die(mysqli_error($koneksi));
			
			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>




<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$no_pendaftaran			= $_POST['no_pendaftaran'];
			$nik			= $_POST['nik'];
			$password	= $_POST['password'];
			$nama_pendaftar		= $_POST['nama_pendaftar'];
			$pilihan_pendaftar		= $_POST['pilihan_pendaftar'];
			
			$sql = mysqli_query($koneksi, "UPDATE tbl_daftar SET no_pendaftaran='$no_pendaftaran', nik='$nik', password='$password', nama_pendaftar='$nama_pendaftar',pilihan_pendaftar='$pilihan_pendaftar' WHERE no_pendaftaran='$no_pendaftaran'") or die(mysqli_error($koneksi));
			
			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="a_tampil_daftar.php?id='.$no_pendaftaran.'";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>


		<form action="" method="post">

			
					<input type="text" name="no_pendaftaran" class="form-control" size="4" value="<?php echo $data['no_pendaftaran']; ?>" hidden="hidden">
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-10">
					<input type="number" name="nik" class="form-control" size="4" value="<?php echo $data['nik']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
					<input type="password" name="password" class="form-control" value="<?php echo $data['password']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pendaftar</label>
				<div class="col-sm-10">
					<input type="text" name="nama_pendaftar" class="form-control" value="<?php echo $data['nama_pendaftar']; ?>" required>
					
				</div>
			</div>

			<div class="form-group row">
		<label class="col-sm-2 col-form-label">Pilihan Pendaftar</label>
		
					<div class="col-sm-10">
					<div class="radio">
						<input type="radio" name="pilihan_pendaftar" value="PG Kecil"  <?php if($data['pilihan_pendaftar']=='PG Kecil'){ ; ?> checked <?php } ?>> PG Kecil
					</div>
					
					<div class="radio">
						<input type="radio" name="pilihan_pendaftar" value="PG Besar"  <?php if($data['pilihan_pendaftar']=='PG Besar'){ ; ?> checked <?php } ?>> PG Besar
					</div>
					
					<div class="radio">
						<input type="radio" name="pilihan_pendaftar" value="TK A"  <?php if($data['pilihan_pendaftar']=='TK A'){ ; ?> checked <?php } ?>> TK A
					</div>
					<div class="radio">
						<input type="radio" name="pilihan_pendaftar" value="TK B"  <?php if($data['pilihan_pendaftar']=='TK B'){ ; ?> checked <?php } ?>> TK B
					</div>
					</div>
	</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
					<a href="a_tampil_daftar.php" class="btn btn-warning">KEMBALI</a>
				</div>
			</div>
		</form>
		
	</div>



	


</body>
</html>