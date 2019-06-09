<?php
error_reporting(0);
include '../koneksi/config.php';
          session_start();
          $no_pendaftaran = $_SESSION['no_pendaftaran'];
          $query = mysqli_query($koneksi,"SELECT*FROM tbl_daftar where no_pendaftaran = '$no_pendaftaran' ");

          $data = mysqli_fetch_array($query);
        ?>

 <?php 
          
          $query1 = mysqli_query($koneksi,"SELECT*FROM tbl_formulir where no_pendaftaran = '$no_pendaftaran' ");
          $data1 = mysqli_fetch_array($query1);
         ?>


        <p style="font-size: 20px;">Data Pendaftar 
        

        
       <a href="#" id="edit_daftar" data-id="<?php echo $data['no_pendaftaran']; ?>" class="btn btn-primary btn-md">
        <span class="fa fa-edit fa-fw"></span>Edit
        </a>
        
        </p>
        
        <p><hr></p>
        

        <div class="row">
          <div class="col-md-9">
             <table>
          <tr>
            <td>NIK Anak</td>
            <td>:</td>
            <td><?php echo $data['nik']; ?></td>
          </tr>
          <tr>
            <td>Nama Anak</td>
            <td>:</td>
            <td><?php echo $data['nama_pendaftar']; ?></td>
          </tr>
           <tr>
            <td>Password Akun</td>
            <td>:</td>
            <td><?php echo $data['password']; ?></td>
          </tr>
           <tr>
            <td>Pilihan Pendaftaran</td>
            <td>:</td>
            <td><?php echo $data['pilihan_pendaftar']; ?></td>
          </tr>
        </table>
          </div>
          <div class="col-md-3">

            <?php if ($data1['gambar'] == null) { ?>
            <!-- banner -->
            <?php   }else{  ?>   
          <img src="../assets/img/<?php echo $data1['gambar'];?>" width="150px" height="150px">
          <?php } ?>
          </div>
        </div>
       
        <hr>
        

        <p style="font-size: 20px;">Data Formulir 
          <?php if ($data1['gambar'] == null) { ?>
            <!-- banner -->
            <?php   }else{  ?>   
          
          <a href="#" id="edit_formulir" data-id="<?php echo $data['no_pendaftaran']; ?>" class="btn btn-primary btn-md">
          <span class="fa fa-edit fa-fw"></span>Edit</a>
        <?php } ?>
        </p>
        <p><hr></p>

        <?php if ($data1['gambar'] == null) { ?>
            
            <h3>Anda Belum Menginput Formulir</h3>
            <p>Silahkan Input Di <a href="formulir.php" class="btn btn-primary">Formulir</a></p>           
            <?php   }else{  ?>   
        <table>
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
           <tr>
            <td>Telephone</td>
            <td>:</td>
            <td><?php echo $data1['telp']; ?></td>
          </tr>
      </table>

      <?php } ?>   
          