<?php 
 
include 'koneksi2.php';
$ID_PEMBAYARAN = $_POST['$ID_PEMBAYARAN'];
$NISN = $_POST['NISN'];
$ID_STAF_ATAU_GURU = $_POST['ID_STAF_ATAU_GURU'];
$TANGGAL_PEMBAYARAN = $_POST['TANGGAL_PEMBAYARAN'];
$NOMINAL = $_POST['NOMINAL'];
 
mysqli_query($koneksi,"UPDATE pembayaran SET NISN='$NISN', ID_STAF_ATAU_GURU='$ID_STAF_ATAU_GURU', TANGGAL_PEMBAYARAN='$TANGGAL_PEMBAYARAN', NOMINAL='$NOMINAL' WHERE ID_PEMBAYARAN='$ID_PEMBAYARAN'");
 
header("location:pembayaran.php");
?>