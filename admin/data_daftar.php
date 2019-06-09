
			<table class="table table-striped table-hover table-sm table-bordered" id="table_daftar">
			<thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>No.Pendaftaran</th>
					<th>NIK</th>
					<th>Password</th>
					<th>Nama Pendaftar</th>
					<th>Pilihan Pendaftar</th>
					<th>Formulir</th>
					<th>AKSI</th>
				</tr>
			</thead>
			<tbody>	
				<?php

				include '../koneksi/config.php';
				 $action = $_REQUEST['action'];
     			 if($action == "show-all"){

     				  $sql =  mysqli_query($koneksi,'SELECT * FROM tbl_daftar order by no_pendaftaran DESC');
      
        			}
      				else{

     			 $sql =  mysqli_query($koneksi,"SELECT * FROM tbl_daftar WHERE pilihan_pendaftar='$action' order by no_pendaftaran DESC");
     
       				 }
       				 
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){

						
						?>

					
						
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['no_pendaftaran']; ?></td>
							<td><?php echo $data['nik']; ?></td>
							<td><?php echo $data['password']; ?></td>
							<td><?php echo $data['nama_pendaftar']; ?></td>
							<td><?php echo $data['pilihan_pendaftar']; ?></td>
							<td>
							<?php 
								$no_pendaftaran = $data['no_pendaftaran'];
								$cek = mysqli_query($koneksi,"SELECT * FROM tbl_formulir where no_pendaftaran ='$no_pendaftaran'");
								if (mysqli_num_rows($cek) == 1) {
	
							 ?>
							
								<a href="a_formulir.php?no_pendaftaran=<?php echo $data['no_pendaftaran']; ?>" class="badge badge-warning">Lihat Formulir</a>
							<?php 

							}else{
							echo '<p class="text-danger">Belum Diinput</p>';
							}

							 ?>
							</td>

							<td>
								<a href="a_edit_daftar.php?no_pendaftaran=<?php echo $data['no_pendaftaran']; ?>" class="badge badge-warning">Edit</a>
								<a href="a_delete_daftar.php?no_pendaftaran=<?php echo $data['no_pendaftaran']; ?>" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						
						<?php
						$no++;
						}
			
						?>
			
			</tbody>
		</table>


		<script type="text/javascript">

		$(document).ready(function(){

		$('#table_daftar').DataTable();         

         });

		</script>