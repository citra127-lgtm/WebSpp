
<!DOCTYPE html>
<html lang="en" dir='1tr'>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
    <link rel="stylesheet" href="sylelon.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

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
    
    <form method="post" action="cek_login.php">


      <div class="container">
          <div class="title">Login</div>
          
              <div class="user-details">               
                <div class="input-box">
                    <ul>
                        <li>
                    <span class="details">Username</span>
                    
                    <td><input type="text" name="username" placeholder="Masukkan username"></td>
                       </li>
                </div>     

                <div class="input-box">
                    <li>
                    <span class="details">Password</span>
                    <input type="password" name="Password" placeholder="Masukkan password"></td>
                    </li>
                </div>               
              </div>
              <div class="button">
               <button ><td><input type="submit" value="LOGIN"></td> </button>
            </div>
          </form>
      </div>


</body>
</html>