<?php
	
	include"../koneksi/config.php";
	$no = 1;
	$id = $_POST['id'];
	$form = mysqli_query($koneksi,"SELECT*FROM tbl_formulir where no_pendaftaran = '$id'");
	$data = mysqli_fetch_array($form);
	
?>
<form role="form" id="form-formulir" method="post" action="update_formulir.php" enctype="multipart/form-data">
<div class="form-group row">
		
			<input type="hidden" name="id_formulir" class="form-control" size="4" value="<?php echo $data['id_formulir']; ?>">
			<input type="hidden" name="no_pendaftaran" class="form-control" size="4" value="<?php echo $data['no_pendaftaran']; ?>">

				<label class="col-sm-2 col-form-label">Nama Lengkap</label>
				<div class="col-sm-10">
					<input type="text" name="nama_lengkap" class="form-control" size="4" value="<?php echo $data['nama_lengkap']; ?>" required>
					<p style="color:red" id="error_edit_nama_lengkap"></p>
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
					<div class="form-check">
						<input type="radio" class="form-check-input" name="jenis_kelamin" value="LAKI-LAKI" required = "required" <?php if($data['jenis_kelamin'] == 'LAKI-LAKI'){ ?> checked="checked" <?php } ?>>
						<label class="form-check-label">LAKI-LAKI</label>
					</div>
					<div class="form-check">
						<input type="radio" class="form-check-input" name="jenis_kelamin" value="PEREMPUAN" required = "required" <?php if($data['jenis_kelamin'] == 'PEREMPUAN'){ ?> checked="checked" <?php } ?>>
						<label class="form-check-label">PEREMPUAN</label>
					</div>
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
				<label class="col-sm-2 col-form-label">Gambar</label>
				<div class="col-sm-10">
					<input type="hidden" name="gambar1" class="form-control" size="4" value="<?php echo $data['gambar']; ?>">
					<input type="file" name="gambar2">
					<img src="../assets/img/<?php echo $data['gambar'];?>" width="150px" height="150px">
				</div>
			</div>

			</form>