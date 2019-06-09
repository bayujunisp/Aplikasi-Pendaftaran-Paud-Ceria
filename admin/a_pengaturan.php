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

     <link rel="stylesheet" type="text/css" href="../assets/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap4.css">
    <script type="text/javascript" src="../assets/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="../assets/js/dataTables.bootstrap4.js"></script>
	
	
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
						<a class="nav-link" href="a_index.php"><span class="fa fa-home fa-fw"></span> Home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="a_tampil_daftar.php"><span class="fa fa-user fa-fw"></span> Daftar</a>
					</li>
					<li class="nav-item active">
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
		<h2>Pengaturan Website</h2>
		
		<hr>
		
		
				<?php
				
				$sql = mysqli_query($koneksi, "SELECT * FROM tbl_pengaturan") or die(mysqli_error($koneksi));
			
					$data = mysqli_fetch_assoc($sql);

					$id_pengaturan = $data['id_pengaturan'];
				
				?>

				<form action="" method="post">

					<div class="form-group row">
					<label class="col-sm-2 col-form-label">Status Pendaftaran</label>
		
					<div class="col-sm-10">
					<div class="radio">
						<input type="radio" name="status_daftar" value="Buka"  <?php if($data['status_daftar']=='Buka'){ ; ?> checked <?php } ?>> Buka
					</div>
					
					<div class="radio">
						<input type="radio" name="status_daftar" value="Tutup"  <?php if($data['status_daftar']=='Tutup'){ ; ?> checked <?php } ?>> Tutup
					</div>
					
					
					</div>
					</div>

					<div class="form-group row">
					<label class="col-sm-2 col-form-label">&nbsp;</label>
					<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
					<a href="a_index.php" class="btn btn-warning">KEMBALI</a>
					</div>
					</div>

				</form>

	</div>
	
	
</body>
</html>

<script type="text/javascript">
  $(document).ready( function () {
    $('#table_daftar').DataTable();
} );

</script>


<?php 

if(isset($_POST['submit'])){

	$status_daftar = $_POST['status_daftar'];

	if ($data['id_pengaturan'] == null) {

		$sql = "SELECT id_pengaturan as maxid FROM tbl_pengaturan order by id_pengaturan desc";	
				$hasil = mysqli_query($koneksi,$sql);
				$data  = mysqli_fetch_array($hasil);
				$id_user = $data['maxid'];
				$noUrut = (int) substr($id_user, 2);
				$noUrut++;

				$char = "PG";
				$newID = $char . sprintf("%03s", $noUrut);
		
		$query = mysqli_query($koneksi,"INSERT INTO tbl_pengaturan values('$newID','$status_daftar')");
		if ($query) {
			echo '<script>alert("Berhasil menambahkan data."); document.location="a_pengaturan.php";</script>';
		}else{
			echo '<script>alert("gagal menambahkan data."); document.location="a_pengaturan.php";</script>';
		}	
	}else{

		$query = mysqli_query($koneksi,"UPDATE tbl_pengaturan set status_daftar = '$status_daftar' where id_pengaturan = '$id_pengaturan'");
		if ($query) {
			echo '<script>alert("Berhasil merubah data."); document.location="a_pengaturan.php";</script>';
		}else{
			echo '<script>alert("gagal merubah data."); document.location="a_pengaturan.php";</script>';
		}	

	}

}

 ?>