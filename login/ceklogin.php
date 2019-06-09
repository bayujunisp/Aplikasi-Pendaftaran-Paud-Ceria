<?php
session_start();

$no_pendaftaran = $_SESSION ['no_pendaftaran'];

if (!isset($no_pendaftaran) || empty($no_pendaftaran)) {
	
	header('location:../index.php');
}

?>