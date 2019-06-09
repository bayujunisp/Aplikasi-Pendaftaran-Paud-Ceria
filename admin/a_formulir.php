<?php 

include('../koneksi/config.php'); 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit</title>
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
		<h2>Formulir</h2>
		
		<hr>
		
		<?php

			$no_pendaftaran = $_GET['no_pendaftaran'];
			
			//query ke database SELECT tabel daftar berdasarkan no_pendaftaran = $no_pendaftaran
			$select = mysqli_query($koneksi, "SELECT * FROM tbl_formulir WHERE no_pendaftaran='$no_pendaftaran'") or die(mysqli_error($koneksi));
			
			$data = mysqli_fetch_array($select);
		?>
		
		
		<form action="" method="post">


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lengkap</label>
				<div class="col-sm-10">
					<input type="text" name="nama_lengkap" class="form-control" size="4" value="<?php echo $data['nama_lengkap']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Panggilan</label>
				<div class="col-sm-10">
					<input type="text" name="nama_panggilan" class="form-control" size="4" value="<?php echo $data['nama_panggilan']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-10">
					<?php 
					if($data['jenis_kelamin'] == 'Laki-Laki'){

					 ?>
					<div class="form-check">
						<input type="radio" class="form-check-input" name="jenis_kelamin" value="LAKI-LAKI" required checked="checked">
						<label class="form-check-label">LAKI-LAKI</label>
					</div>
					<div class="form-check">
						<input type="radio" class="form-check-input" name="jenis_kelamin" value="PEREMPUAN" required>
						<label class="form-check-label">PEREMPUAN</label>
					</div>
				<?php 
						}else{

					?>

					<div class="form-check">
						<input type="radio" class="form-check-input" name="jenis_kelamin" value="LAKI-LAKI" required>
						<label class="form-check-label">LAKI-LAKI</label>
					</div>
					<div class="form-check">
						<input type="radio" class="form-check-input" name="jenis_kelamin" value="PEREMPUAN" required checked="checked">
						<label class="form-check-label">PEREMPUAN</label>
					</div>
				<?php } ?>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat/Tanggal Lahir</label>
				<div class="col-sm-10">
					<input type="text" name="ttp_tgl" class="form-control" size="4" value="<?php echo $data['ttp_tgl']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-10">
					<input type="text" name="agama" class="form-control" size="4" value="<?php echo $data['agama']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Anak Ke</label>
				<div class="col-sm-10">
					<input type="text" name="anak_ke" class="form-control" size="4" value="<?php echo $data['anak_ke']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Ayah</label>
				<div class="col-sm-10">
					<input type="text" name="nama_ayah" class="form-control" size="4" value="<?php echo $data['nama_ayah']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Lahir Ayah</label>
				<div class="col-sm-10">
					<input type="text" name="tgl_lahir_ayah" class="form-control" size="4" value="<?php echo $data['tgl_lahir_ayah']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan Ayah</label>
				<div class="col-sm-10">
					<input type="text" name="pendidikan_ayah" class="form-control" size="4" value="<?php echo $data['pendidikan_ayah']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
				<div class="col-sm-10">
					<input type="text" name="pekerjaan_ayah" class="form-control" size="4" value="<?php echo $data['pekerjaan_ayah']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Ibu</label>
				<div class="col-sm-10">
					<input type="text" name="nama_ibu" class="form-control" size="4" value="<?php echo $data['nama_ibu']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Lahir Ibu</label>
				<div class="col-sm-10">
					<input type="text" name="tgl_lahir_ibu" class="form-control" size="4" value="<?php echo $data['tgl_lahir_ibu']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan Ibu</label>
				<div class="col-sm-10">
					<input type="text" name="pendidikan_ibu" class="form-control" size="4" value="<?php echo $data['pendidikan_ibu']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
				<div class="col-sm-10">
					<input type="text" name="pekerjaan_ibu" class="form-control" size="4" value="<?php echo $data['pekerjaan_ibu']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Jalan</label>
				<div class="col-sm-10">
					<input type="text" name="nama_jalan" class="form-control" size="4" value="<?php echo $data['nama_jalan']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kelurahan</label>
				<div class="col-sm-10">
					<input type="text" name="kelurahan" class="form-control" size="4" value="<?php echo $data['kelurahan']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-10">
					<input type="text" name="kecamatan" class="form-control" size="4" value="<?php echo $data['kecamatan']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kota</label>
				<div class="col-sm-10">
					<input type="text" name="kota" class="form-control" size="4" value="<?php echo $data['kota']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Provinsi</label>
				<div class="col-sm-10">
					<input type="text" name="provinsi" class="form-control" size="4" value="<?php echo $data['provinsi']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Telepon</label>
				<div class="col-sm-10">
					<input type="text" name="telp" class="form-control" size="4" value="<?php echo $data['telp']; ?>" required>
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
<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			
			$id_formulir			= $data['id_formulir'];
			$no_pendaftaran			= $data['no_pendaftaran'];
			$nama_lengkap			= $_POST['nama_lengkap'];
			$nama_panggilan			= $_POST['nama_panggilan'];
			$jenis_kelamin			= $_POST['jenis_kelamin'];
			$ttp_tgl				= $_POST['ttp_tgl'];
			$agama					= $_POST['agama'];
			$anak_ke				= $_POST['anak_ke'];
			$nama_ayah			= $_POST['nama_ayah'];
			$tgl_lahir_ayah			= $_POST['tgl_lahir_ayah'];
			$pendidikan_ayah			= $_POST['pendidikan_ayah'];
			$pekerjaan_ayah			= $_POST['pekerjaan_ayah'];
			$nama_ibu			= $_POST['nama_ibu'];
			$tgl_lahir_ibu			= $_POST['tgl_lahir_ibu'];
			$pendidikan_ibu			= $_POST['pendidikan_ibu'];
			$pekerjaan_ibu			= $_POST['pekerjaan_ibu'];
			$nama_jalan			= $_POST['nama_jalan'];
			$kelurahan			= $_POST['kelurahan'];
			$kecamatan			= $_POST['kecamatan'];
			$kota			= $_POST['kota']; 
			$provinsi			= $_POST['provinsi'];
			$telp			= $_POST['telp'];
			
			
			
			$sql = mysqli_query($koneksi, "UPDATE tbl_formulir SET id_formulir='$id_formulir',no_pendaftaran='$no_pendaftaran', nama_lengkap='$nama_lengkap',nama_panggilan='$nama_panggilan',jenis_kelamin='$jenis_kelamin',ttp_tgl='$ttp_tgl',agama='$agama',anak_ke='$anak_ke',nama_ayah='$nama_ayah',tgl_lahir_ayah='$tgl_lahir_ayah',pendidikan_ayah='$pendidikan_ayah',pekerjaan_ayah='$pekerjaan_ayah',nama_ibu='$nama_ibu',tgl_lahir_ibu='$tgl_lahir_ibu',pendidikan_ibu='$pendidikan_ibu',pekerjaan_ibu='$pekerjaan_ibu',nama_jalan='$nama_jalan',kelurahan='$kelurahan',kecamatan='$kecamatan',kota='$kota',provinsi='$provinsi',telp='$telp' WHERE no_pendaftaran='$no_pendaftaran'") or die(mysqli_error($koneksi));
			
			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="a_formulir.php?no_pendaftaran='.$no_pendaftaran.'";</script>';
			}else{
				echo '<script>alert("Gagal menyimpan data."); document.location="a_formulir.php?no_pendaftaran='.$no_pendaftaran.'";</script>';
			}
		}



		?>


