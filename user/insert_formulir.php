<?php
include '../koneksi/config.php';

session_start();
$no_pendaftaran = $_SESSION['no_pendaftaran'];
$daftar = "SELECT*FROM tbl_daftar where no_pendaftaran= '$no_pendaftaran'";
$hasil_daftar = mysqli_query($koneksi,$daftar);
$data_daftar  = mysqli_fetch_array($hasil_daftar);
$no_pendaftaran = $data_daftar['no_pendaftaran'];


$sql = "SELECT id_formulir as maxid FROM tbl_formulir order by id_formulir desc";
$hasil = mysqli_query($koneksi,$sql);
$data  = mysqli_fetch_array($hasil);
$id_user = $data['maxid'];
$noUrut = (int) substr($id_user, 2);
$noUrut++;

$char = "FM";
$newID = $char . sprintf("%03s", $noUrut);

$nama_lengkap	 = $_POST['nama_lengkap'];
$nama_panggilan  = $_POST['nama_panggilan'];
$jk				 = $_POST['jk'];
$ttp_tgl    	 = $_POST['ttp_tgl'];
$agama			 = $_POST['agama'];
$anak_ke		 = $_POST['anak_ke'];
$nama_ayah		 = $_POST['nama_ayah'];
$tgl_lahir_ayah  = $_POST['tgl_lahir_ayah'];
$pendidikan_ayah = $_POST['pendidikan_ayah'];
$pekerjaan_ayah	 = $_POST['pekerjaan_ayah'];
$nama_ibu		 = $_POST['nama_ibu'];
$tgl_lahir_ibu   = $_POST['tgl_lahir_ibu'];
$pendidikan_ibu  = $_POST['pendidikan_ibu'];
$pekerjaan_ibu	 = $_POST['pekerjaan_ibu'];
$nama_jalan  	 = $_POST['nama_jalan'];
$kelurahan	     = $_POST['kelurahan'];
$kecamatan	     = $_POST['kecamatan'];
$kota	         = $_POST['kota'];
$provinsi	     = $_POST['provinsi'];
$telp	     	 = $_POST['telp'];

// ambil data file
$namaFile = $_FILES['gambar']['name'];
$namaSementara = $_FILES['gambar']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../assets/img/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {

    $sql = mysqli_query($koneksi,"INSERT INTO tbl_formulir 
    	VALUES('$newID',
    	'$no_pendaftaran',
    	'$nama_lengkap',
    	'$nama_panggilan',
    	'$jk',
    	'$ttp_tgl',
    	'$agama',
    	'$anak_ke',
    	'$nama_ayah',
    	'$tgl_lahir_ayah',
    	'$pendidikan_ayah',
    	'$pekerjaan_ayah',
    	'$nama_ibu',
    	'$tgl_lahir_ibu',
    	'$pendidikan_ibu',
    	'$pekerjaan_ibu',
    	'$nama_jalan',
    	'$kelurahan',
    	'$kecamatan',
    	'$kota',
    	'$provinsi',
    	'$telp',
    	'$namaFile')") or die(mysqli_error($koneksi));
    
    if($sql){
        echo '<script>alert("Berhasil menambahkan data!"); document.location="formulir.php";</script>';
    }else{
        echo '<script>alert("Gagal menambahkan data!"); document.location="formulir.php";</script>';
    }

}
else{
	 echo '<script>alert("Gagal Upload File!"); document.location="formulir.php";</script>';
}



?>