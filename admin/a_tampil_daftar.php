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
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    
	<script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap4.css">
    <script type="text/javascript" src="../assets/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="../assets/js/dataTables.bootstrap4.js"></script>

	
	
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

					<li class="nav-item active">
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
		<h2>Manage Account</h2>
		
		<hr>

		 <center>
              <div class="col-md-3">
              <select class="form-control" id="getDaftar"> 
              <option value="show-all" selected="selected">Pilihan Pendaftar</option>
              <option value="PG Kecil">PG Kecil</option>
              <option value="PG Besar">PG Besar</option>
              <option value="TK A">TK A</option>
              <option value="TK B">TK B</option>
              </select>
              </div>
              </center><br>

		
		

		<div id="pendaftar"></div>
		
	</div>
	
	
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){

	function getAll()
	{
		$.ajax({
			url: 'data_daftar.php',
			data: 'action=show-all',
			cache: false,
			success: function(response){
				// jika berhasil 
				$("#pendaftar").html(response);
			}
		});			
}

		getAll();

	// ketika ada event change
	$("#getDaftar").change(function()
	{				
		var pil = $(this).find(":selected").val();
		var dataString = 'action='+ pil;
				
		$.ajax({
			url: 'data_daftar.php',
			data: dataString,
			cache: false,
			success: function(response){
				// jika berhasil 
				$("#pendaftar").html(response);
			} 
		});
})

});
</script>