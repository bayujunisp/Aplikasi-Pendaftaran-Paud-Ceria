<?php
include 'koneksi/config.php';

$sql = "SELECT no_pendaftaran as maxid FROM tbl_daftar order by no_pendaftaran desc";
$hasil = mysqli_query($koneksi,$sql);
$data  = mysqli_fetch_array($hasil);
$id_user = $data['maxid'];
$noUrut = (int) substr($id_user, 2);
$noUrut++;

$char = "PD";
$newID = $char . sprintf("%03s", $noUrut);

$nama		= $_POST['nama'];
$nik		= $_POST['nik'];
$password	= $_POST['password'];
$pilihan    = $_POST['pilihan'];

$cek = mysqli_query($koneksi, "SELECT * FROM tbl_daftar WHERE nik='$nik'") or die(mysqli_error($koneksi));

$cek_total = mysqli_query($koneksi, "SELECT * FROM tbl_daftar WHERE pilihan_pendaftar='$pilihan'") or die(mysqli_error($koneksi));


if(mysqli_num_rows($cek) == 0 && mysqli_num_rows($cek_total) <= 20){
    $sql = mysqli_query($koneksi, "INSERT INTO tbl_daftar VALUES('$newID','$nik','$password','$nama','$pilihan')") or die(mysqli_error($koneksi));
    
    if($sql){
        echo '<script>alert("Berhasil menambahkan data!"); document.location="daftar.php";</script>';
    }else{
        echo '<script>alert("Gagal menambahkan data!"); document.location="daftar.php";</script>';
    }
}else if(mysqli_num_rows($cek_total) > 20){
    echo '<script>alert("Kuota Pendaftaran Sudah Penuh!"); document.location="daftar.php";</script>';
}else{
    echo '<script>alert("nik Telah Terdaftar!"); document.location="daftar.php";</script>';
}
?>