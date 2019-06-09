<?php
include"../koneksi/config.php";

			$id_formulir			= $_POST['id_formulir'];
			$no_pendaftaran			= $_POST['no_pendaftaran'];
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
			
			$gambar1 = $_POST['gambar1'];
			// ambil data file


		// ambil data file
			$namaFile = $_FILES['gambar2']['name'];
			$namaSementara = $_FILES['gambar2']['tmp_name'];

			// tentukan lokasi file akan dipindahkan
		$dirUpload = "../assets/img/";

		// pindahkan file
			$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

		if ($terupload) {
			$gambar = $namaFile;
		}else{
			$gambar = $gambar1;
		}


					$query = "UPDATE tbl_formulir SET id_formulir='$id_formulir',no_pendaftaran='$no_pendaftaran', nama_lengkap='$nama_lengkap',nama_panggilan='$nama_panggilan',jenis_kelamin='$jenis_kelamin',ttp_tgl='$ttp_tgl',agama='$agama',anak_ke='$anak_ke',nama_ayah='$nama_ayah',tgl_lahir_ayah='$tgl_lahir_ayah',pendidikan_ayah='$pendidikan_ayah',pekerjaan_ayah='$pekerjaan_ayah',nama_ibu='$nama_ibu',tgl_lahir_ibu='$tgl_lahir_ibu',pendidikan_ibu='$pendidikan_ibu',pekerjaan_ibu='$pekerjaan_ibu',nama_jalan='$nama_jalan',kelurahan='$kelurahan',kecamatan='$kecamatan',kota='$kota',provinsi='$provinsi',telp='$telp',gambar='$gambar' WHERE no_pendaftaran='$no_pendaftaran'";
				
			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysql_error());
		
?>

