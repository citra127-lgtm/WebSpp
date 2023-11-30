<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['level']=="admin"){
		$_SESSION['username']=$username;
		$_SESSION['level']="admin";

		header("location:admin/dashboard2.php");

	}else if($data['level']=="user"){
		$_SESSION['username']=$username;
		$_SESSION['level']="user";

		header("location:dashboard.php");

	}else{
		
		header("location:lon.php?pesan=gagal");
	}
	}else{

		header("location:lon.php?pesan=gagal");
	}


?>