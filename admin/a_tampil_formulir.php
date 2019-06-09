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
	
	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">Manage Account</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
 
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="a_index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="a_tambah.php">Tambah</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="a_delete.php">Hapus</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="a_tampil_daftar.php">Daftar</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="a_tampil_formulir.php">Formulir</a>
					</li>

				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container" style="margin-top:20px">
		<h2>Manage Account</h2>
		
		<hr>
		
		<table class="table table-striped table-hover table-sm table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>No.Pendaftaran</th>
					<th>NIK</th>
					<th>Password</th>
					<th>Nama Pendaftar</th>
					<th>Pilihan Pendaftar</th>
					<th>AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM tbl_daftar ORDER BY no_pendaftaran DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['no_pendaftaran'].'</td>
							<td>'.$data['nik'].'</td>
							<td>'.$data['password'].'</td>
							<td>'.$data['nama_pendaftar'].'</td>
							<td>'.$data['Pilihan_pendaftar'].'</td>
							<td>
								<a href="a_edit.php?no_pendaftaran='.$data['no_pendaftaran'].'" class="badge badge-warning">Edit</a>
								<a href="a_delete.php?no_pendaftaran='.$data['no_pendaftaran'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
		
	</div>
	
	
</body>
</html>