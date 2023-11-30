<?php 
// koneksi database
include 'koneksi2.php';
 
// menangkap data yang di kirim dari form

$NISN =$_POST['NISN'];
$NAMA_SISWA = $_POST['NAMA_SISWA'];
$KELAS_JURUSAN = $_POST['KELAS_JURUSAN'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into siswa values('','$NISN','$NAMA_SISWA','$KELAS_JURUSAN')");

// MENANGKAP DATA YG DIKIRIM SELECT

// mengalihkan halaman kembali ke index.php
header("location:dashboard2.php");

?>