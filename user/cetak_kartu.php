<!DOCTYPE html>
<?php
error_reporting(0);
include '../koneksi/config.php';
          session_start();
          $no_pendaftaran = $_SESSION['no_pendaftaran'];
          $query = mysqli_query($koneksi,"SELECT*FROM tbl_daftar where no_pendaftaran = '$no_pendaftaran' ");

          $data = mysqli_fetch_array($query);

          $query1 = mysqli_query($koneksi,"SELECT*FROM tbl_formulir where no_pendaftaran = '$no_pendaftaran' ");

          $data1 = mysqli_fetch_array($query1);
        ?>
<html>
<head>
    
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-3.2.1.js"></script>

    <title>Kartu Pendaftaran</title>
</head>
<body style="padding: 0px 100px 100px 100px;">

    <div class="container-fluid">
   <h1 class="mt-4" style="text-align: center;">Kartu Pendaftaran</h1>
    <hr>
    <br>
    <div class="row">
        <div class="col-md-8">
            <table>
          <tr>
            <td>NIK Anak</td>
            <td>:</td>
            <td><?php echo $data['nik']; ?></td>
          </tr>
           <tr>
            <td>Pilihan Pendaftaran</td>
            <td>:</td>
            <td><?php echo $data['pilihan_pendaftar']; ?></td>
          </tr>
           <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?php echo $data1['nama_lengkap']; ?></td>
          </tr>
          <tr>
            <td>Nama Panggilan</td>
            <td>:</td>
            <td><?php echo $data1['nama_panggilan']; ?></td>
          </tr>
           <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $data1['jenis_kelamin']; ?></td>
          </tr>
           <tr>
            <td>Tempat/Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $data1['ttp_tgl']; ?></td>
          </tr>
           <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?php echo $data1['agama']; ?></td>
          </tr>
          <tr>
            <td>Anak Ke</td>
            <td>:</td>
            <td><?php echo $data1['anak_ke']; ?></td>
          </tr>
        </table>
        </div>

        <div class="col-md-4">
            <img src="../assets/img/<?php echo $data1['gambar']; ?>" width="200px" height="200px">
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-6">

              <h3>Data Wali</h3>
             <table>
          <tr>
            <td>Nama Ayah</td>
            <td>:</td>
            <td><?php echo $data1['nama_ayah']; ?></td>
          </tr>
          <tr>
            <td>Tempat/Tanggal Lahir Ayah</td>
            <td>:</td>
            <td><?php echo $data1['tgl_lahir_ayah']; ?></td>
          </tr>
           <tr>
            <td>Pendidikan Ayah</td>
            <td>:</td>
            <td><?php echo $data1['pendidikan_ayah']; ?></td>
          </tr>
           <tr>
            <td>Pekerjaan Ayah</td>
            <td>:</td>
            <td><?php echo $data1['pekerjaan_ayah']; ?></td>
          </tr>
        </table>

        </div>
        <div class="col-md-6">
       
              <h3><br></h3>
             <table>
          <tr>
            <td>Nama Ibu</td>
            <td>:</td>
            <td><?php echo $data1['nama_ibu']; ?></td>
          </tr>
          <tr>
            <td>Tempat/Tanggal Lahir Ibu</td>
            <td>:</td>
            <td><?php echo $data1['tgl_lahir_ibu']; ?></td>
          </tr>
           <tr>
            <td>Pendidikan Ibu</td>
            <td>:</td>
            <td><?php echo $data1['pendidikan_ibu']; ?></td>
          </tr>
           <tr>
            <td>Pekerjaan Ibu</td>
            <td>:</td>
            <td><?php echo $data1['pekerjaan_ibu']; ?></td>
          </tr>
        </table>
        </div>
        </div>

        <hr>
        <h3>Alamat Wali</h3>
         <table>
          <tr>
            <td>Nama Jalan</td>
            <td>:</td>
            <td><?php echo $data1['nama_jalan']; ?></td>
          </tr>
          <tr>
            <td>Kelurahan</td>
            <td>:</td>
            <td><?php echo $data1['kelurahan']; ?></td>
          </tr>
           <tr>
            <td>Kecamatan</td>
            <td>:</td>
            <td><?php echo $data1['kecamatan']; ?></td>
          </tr>
           <tr>
            <td>Kabupaten/Kota</td>
            <td>:</td>
            <td><?php echo $data1['kota']; ?></td>
          </tr>
          <tr>
            <td>Provinsi</td>
            <td>:</td>
            <td><?php echo $data1['provinsi']; ?></td>
          </tr>
        </table>

        <hr>
        <h3>Kontak</h3>
        <table>
             <tr>
            <td>Telephone</td>
            <td>:</td>
            <td><?php echo $data1['telp']; ?></td>
          </tr>
        </table>

    </div>

</body>
</html>
    <script>
        window.print();
    </script>