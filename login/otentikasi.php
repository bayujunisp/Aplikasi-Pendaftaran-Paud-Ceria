<?php

if(isset($_POST['login'])){

// menangkap data yang dikirim dari form
$nik = $_POST['nik'];
$password = $_POST['password'];
 
// menyeleksi data tbl_daftar dengan nik dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tbl_daftar where nik='$nik' and password='$password'");
// menghitung jumlah data yang ditemukan
$data1 = mysqli_fetch_array($data);
$no_pendaftaran = $data1['no_pendaftaran'];
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	
	$_SESSION['no_pendaftaran'] = $no_pendaftaran;

		
	echo '<script>alert("Login Sukes!"); document.location="user/home.php";</script>';

} else {
	
	echo '<script>alert("Login Gagal!");</script>';
	
}


}
?>