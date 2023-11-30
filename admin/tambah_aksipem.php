<?php 
// koneksi database
include 'koneksi2.php';
 
// menangkap data yang di kirim dari form
$NISN = $_POST['NISN'];
$ID_STAF_ATAU_GURU = $_POST['ID_STAF_ATAU_GURU'];
$TANGGAL_PEMBAYARAN = $_POST['TANGGAL_PEMBAYARAN'];
$NOMINAL = $_POST['NOMINAL'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into pembayaran values('','$NISN','$ID_STAF_ATAU_GURU','$TANGGAL_PEMBAYARAN','$NOMINAL')");
 
// mengalihkan halaman kembali ke index.php
header("location:pembayaran.php");
 
?>