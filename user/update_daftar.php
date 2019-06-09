<?php
include"../koneksi/config.php";

			
$id = $_POST['no_pendaftaran'];
$nik = $_POST['nik'];
$password = $_POST['password'];
$nama_pendaftar = $_POST['nama_pendaftar'];
$pilihan_pendaftar = $_POST['pilihan_pendaftar'];

					$query = "UPDATE tbl_daftar SET
											nik = '$nik',
											password = '$password',
											nama_pendaftar = '$nama_pendaftar',
											pilihan_pendaftar = '$pilihan_pendaftar'
											WHERE no_pendaftaran = '$id'
											";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysql_error());
			

?>

