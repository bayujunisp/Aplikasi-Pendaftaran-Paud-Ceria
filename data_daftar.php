  <table class="table table-striped table-hover table-sm table-bordered" id="table_daftar">
      <thead class="thead-dark">
        <tr>
          <th>No</th>
          <th>Nama Pendaftar</th>
          <th>Pilihan Pendaftar</th>
        </tr>
      </thead>
      <tbody>
 <?php
      include 'koneksi/config.php';

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
            //menampilkan data perulangan
            echo '
            <tr>
              <td>'.$no.'</td>
              <td>'.$data['nama_pendaftar'].'</td>
              <td>'.$data['pilihan_pendaftar'].'</td>
            </tr>
            ';
            $no++;
          }
        //jika query menghasilkan nilai 0
       
        ?>


        </tbody>
    </table>

    <script type="text/javascript">
  $(document).ready( function () {
    $('#table_daftar').DataTable();
} );

</script>