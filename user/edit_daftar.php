
<?php
	
	include"../koneksi/config.php";
	$no = 1;
	$id = $_POST['id'];
	$data = mysqli_query($koneksi,"SELECT*FROM tbl_daftar where no_pendaftaran = '$id'");
	$row = mysqli_fetch_array($data);
	
?>
<form role="form" id="form-edit" method="post" action="update_daftar.php">
	<div class="form-group">
		<label>nik</label>
		<input type="hidden" name="no_pendaftaran" value="<?php echo $row['no_pendaftaran'] ; ?>">
		<input class="form-control" name="nik" value="<?php echo $row['nik'] ; ?>">
	</div>
	
	<div class="form-group">
		<label>password</label>
		<input class="form-control" name="password"  value="<?php echo $row['password'] ; ?>">
	</div>
	<div class="form-group">
		<label>nama_pendaftar</label>
		<input type="text" name="nama_pendaftar" class="form-control" rows="3" value="<?php echo $row['nama_pendaftar'] ; ?>">
	</div>

	<div class="form-group">
		<label>Pilihan Pendaftar</label>
		<div class="radio">
					<label>
						<input type="radio" name="pilihan_pendaftar" value="PG Kecil"  <?php if($row['pilihan_pendaftar']=='PG Kecil'){ ; ?> checked <?php } ?>>PG Kecil
					</label>
					</div>
					<div class="radio">
					<label>
						<input type="radio" name="pilihan_pendaftar" value="PG Besar"  <?php if($row['pilihan_pendaftar']=='PG Besar'){ ; ?> checked <?php } ?>>PG Besar
					</label>
					</div>
					<div class="radio">
					<label>
						<input type="radio" name="pilihan_pendaftar" value="TK A"  <?php if($row['pilihan_pendaftar']=='TK A'){ ; ?> checked <?php } ?>>TK A
					</label>
					</div>
					<div class="radio">
					<label>
						<input type="radio" name="pilihan_pendaftar" value="TK B"  <?php if($row['pilihan_pendaftar']=='TK B'){ ; ?> checked <?php } ?>>TK B
					</label>
					</div>
	</div>
	
</form>