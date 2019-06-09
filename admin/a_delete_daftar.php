<?php
//include file ../koneksi/config.php
include('../koneksi/config.php');

	//membuat variabel $id yang menyimpan nilai dari $_GET['id']
	$no_pendaftaran = $_GET['no_pendaftaran'];
	
		//query ke database DELETE untuk menghapus data dengan kondisi id=$id
		$del_daftar = mysqli_query($koneksi, "DELETE FROM tbl_daftar WHERE no_pendaftaran='$no_pendaftaran'") or die(mysqli_error($koneksi));
		$del_form = mysqli_query($koneksi, "DELETE FROM tbl_formulir WHERE no_pendaftaran='$no_pendaftaran'") or die(mysqli_error($koneksi));
		if($del_daftar&&$del_form){
            echo '<script>alert("Berhasil menghapus data.");
             document.location="a_tampil_daftar.php";</script>';
		}else{
            echo '<script>alert("Gagal menghapus data."); 
            document.location="a_tampil_daftar.php";</script>';
		}
 
?>