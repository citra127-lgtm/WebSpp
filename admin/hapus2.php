<?php 
// koneksi database
include 'koneksi2.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM siswa WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard2.php");
 
?>