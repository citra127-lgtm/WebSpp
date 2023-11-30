<?php 
 
include 'koneksi2.php';
$id = $_POST['id'];
$NISN = $_POST['NISN'];
$NAMA_SISWA = $_POST['NAMA_SISWA'];
$KELAS_JURUSAN = $_POST['KELAS_JURUSAN'];
 
mysqli_query($koneksi,"UPDATE siswa SET NISN='$NISN', NAMA_SISWA='$NAMA_SISWA', KELAS_JURUSAN='$KELAS_JURUSAN' WHERE id='$id'");
 
header("location:dashboard2.php");
?>