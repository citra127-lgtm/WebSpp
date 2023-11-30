<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan PHP dan MySQLi - WWW.MALASNGODING.COM</title>
	<link rel="stylesheet" href="sylelon1.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	<h2></h2>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="cek_login.php">
		
	
		<div class="wrapper">
			<h1>Login</h1>
			<div class ="input-box">
				<input type="text" name="username" placeholder="Masukkan username"
				required>
				<i class='bx bxs-user'></i>
                 </div>
                 <div class="input-box">
				 <input type="password" name="password" placeholder="Masukkan password" required>
				 <i class='bx bxs-lock-alt'></i>
                </div>
				<button type="submit" class="btn">Login</button>
				<div class="register-link">
				<p>Klik login untuk dapat mengakses halaman utama</p>
            </div>		
	</form>
        </div>
</body>
</html>


