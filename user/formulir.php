<!DOCTYPE html>

<?php
error_reporting(0);
include '../koneksi/config.php';
include '../login/ceklogin.php';
session_start();          
          $no_pendaftaran = $_SESSION['no_pendaftaran'];
          $query = mysqli_query($koneksi,"SELECT*FROM tbl_daftar where no_pendaftaran = '$no_pendaftaran' ");

          $data = mysqli_fetch_array($query);
        ?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pendaftaran Paud Ceria</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
  
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Pendaftaran Paud Ceria</div>
      <div class="list-group list-group-flush">
         <a href="home.php" class="list-group-item list-group-item-action bg-light">
         <span class="fa fa-home fa-fw"></span> Beranda</a>
        <a href="profile.php" class="list-group-item list-group-item-action bg-light">
        <span class="fa fa-user fa-fw"></span> Profile</a>
        <a href="formulir.php" class="list-group-item list-group-item-action bg-info">
        <span class="fa fa-pencil-square-o fa-fw"></span> Formulir</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

     <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item active">
              <div class="nav-link"><span class="fa fa-home fa-fw"></span>  Beranda</div>
            </li> 
            <li class="nav-item active">
              <div class="nav-link">/</div>
            </li> 
             <li class="nav-item">
              <div class="nav-link"><span class="fa fa-pencil-square-o fa-fw"></span>  Formulir</div>
            </li> 
          </ul>

          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            
            <li class="nav-item active">
              <a href="profile.php" class="nav-link">
              <span class="fa fa-user fa-fw"></span>  
              <?php echo $data['nama_pendaftar']; ?></a>
            </li>

             <li class="nav-item active">
              <a href="../login/logout.php" class="nav-link">
              <span class="fa fa-sign-out fa-fw"></span>  Logout</a>
            </li>
          </ul>

        </div>

      </nav>


     <div class="container-fluid">

     <?php 

     $cek = mysqli_query($koneksi,"SELECT*FROM tbl_formulir where no_pendaftaran = '$no_pendaftaran'") or die(mysqli_error($koneksi));

     if(mysqli_num_rows($cek) == 1){

      ?>
        <br>
        <div class="jumbotron">
        <h1 class="mt-4">Anda Sudah Mengisi Formulir 


        </h1>
        <p style="font-size: 20px;">Silahkan Cek Data Di </p>
        <p>
        <a href="profile.php" class="btn btn-primary">Profile</a>

         </p>
      
      </div>

      <?php 

      }else{
         ?>
        <h1 class="mt-4">Formulir Pendaftaran</h1>
        <br>
          <form method="POST" action="insert_formulir.php" enctype="multipart/form-data">

            <div class="jumbotron">
            
          <div class="form-group">
            <label for="exampleInputEmail1">1. Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">2. Nama Panggilan</label>
            <input type="text" class="form-control" name="nama_panggilan" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Panggilan">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">3. Jenis Kelamin</label>
              <div class="radio">
                <label><input type="radio" name="jk" value="LAKI-LAKI"> LAKI-LAKI</label>
              </div>
             <div class="radio">
                <label><input type="radio" name="jk" value="PEREMPUAN"> PEREMPUAN</label>
             </div>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">4. Tempat/Tanggal Lahir</label>
            <input type="text" class="form-control" name="ttp_tgl" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat/Tanggal Lahir">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">5. Agama</label>
            <input type="text" class="form-control" name="agama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">6. Anak Ke</label>
            <input type="text" class="form-control" name="anak_ke" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Anak Ke">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">7. Nama Ayah/Wali</label>
            <input type="text" class="form-control" name="nama_ayah" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Ayah/Wali">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">a. Tempat/Tanggal Lahir</label>
            <input type="text" class="form-control" name="tgl_lahir_ayah" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat/Tanggal Lahir">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">b. Pendidikan Ayah</label>
            <input type="text" class="form-control" name="pendidikan_ayah" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pendidikan Ayah">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">c. Pekerjaan Ayah</label>
            <input type="text" class="form-control" name="pekerjaan_ayah" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pekerjaan Ayah">
          </div>
           <div class="form-group">
            <label for="exampleInputEmail1">8. Nama Ibu/Wali</label>
            <input type="text" class="form-control" name="nama_ibu" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Ibu/Wali">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">a. Tempat/Tanggal Lahir</label>
            <input type="text" class="form-control" name="tgl_lahir_ibu" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat/Tanggal Lahir">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">b. Pendidikan Ibu</label>
            <input type="text" class="form-control" name="pendidikan_ibu" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pendidikan Ibu">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">c. Pekerjaan Ibu</label>
            <input type="text" class="form-control" name="pekerjaan_ibu" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pekerjaan Ibu">
          </div>

           <div class="form-group">
            <label for="exampleInputEmail1">9. Alamat Orang Tua/Wali</label>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">a. Nama Jalan</label>
            <input type="text" class="form-control" name="nama_jalan" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Jalan">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">b. Kelurahan</label>
            <input type="text" class="form-control" name="kelurahan" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kelurahan">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">c. Kecamatan</label>
            <input type="text" class="form-control" name="kecamatan" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kecamatan">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">d. Kota</label>
            <input type="text" class="form-control" name="kota" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kota">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">e. Provinsi</label>
            <input type="text" class="form-control" name="provinsi" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Provinsi">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">f. Telephone</label>
            <input type="text" class="form-control" name="telp" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telephone">
          </div>
          
          <div class="form-group">
            <label for="foto">10. Pas Foto Anak</label>
            <br>
            <input type="file" name="gambar">
        </div>

         <div class="form-group">
            <label for="exampleInputEmail1">11. Konfirmasi Data(Harus Diisi)</label>
            <div class="checkbox">
              <label><input type="checkbox" value="true" required="required"> Data yang kami isi diatas adalah data yang sebenar-benarnya</label>
            </div>
          </div>

        <div class="jumbotron">
          
           <input type="submit" name="submit" value="Kirim" class="btn btn-success">
           <input type="reset" name="reset" value="Reset" class="btn btn-danger">
        </div>

        </form>
          <?php 
            }
           ?>
      </div>


    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  

  

</body>
</html>

<!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
