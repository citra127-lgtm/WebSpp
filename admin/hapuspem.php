<?php 
// koneksi database
include 'koneksi2.php';
 
// menangkap data id yang di kirim dari url
$ID_PEMBAYARAN = $_GET['ID_PEMBAYARAN'];
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM pembayaran WHERE ID_PEMBAYARAN='$ID_PEMBAYARAN'");
 
// mengalihkan halaman kembali ke index.php
header("location:pembayaran.php");
 
?>