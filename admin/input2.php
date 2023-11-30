
<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="dash.css">
	<link 
       rel="stylesheet" 
       href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
	   />
</head>
<body>

<div class="sidebar">		
      	<div class="logo"></div>
      	<ul class="menu">

      		<li class="active">
      			<a href="dashboard2.php" >
      				<i class="fa-solid fa-graduation-cap"></i>
      				<span>Dashboard</span>
      			</a>
      		</li>
      		<li>
      			<a href="pembayaran.php">
				  <i class="fa-solid fa-magnifying-glass-dollar"></i>
      				<span>Invoice</span>
      			</a>
      		</li>
      		<li>
      			<a href="#">
      				
      				<span></span>
      			</a>
      		</li>
      		<li>
      			<a href="#">
      				
      				<span></span>
      			</a>
      		</li>
      		<li>
      			<a href="#">
      				
      				<span></span>
      			</a>
      		</li>
      		<li>
      			<a href="#">
      				
      				<span></span>
      			</a>
      		</li>
      		<li>
      			<a href="#">
      				
      				<span></span>
      			</a>
      		</li>
      		<li class="logout">
      			<a href="login.php">
      				<i class="fa-solid fa-right-from-bracket"></i>
      				<span>Logout</span>
      			</a>
      		</li>
		</ul>
	</div>


	<div class="main--content">
	    <div class="header--wrapper">
			<div class="header--title">
				<span>Primary</span>
				<h2>Dashboard</h2>
			</div>
			<div class="user--info">
			    <div class="search--box">
				<i class="fa-solid fa-search"></i>
				<input type="text"
				 placeholder="Search">
				 </div>
				 <img src="./image/img.png" alt=""/>
			</div>
		</div>
		<div class="card--container">
			<h3 class="main--title">Data siswa</h3>
			<div class="card--wrapper">
				<div class="payment--card">
					<div class="card--header">
						<div class="amount">
							<span class="title">Payment amout</span>
						</div>
					</div>
				</div>
				
					
						<div class="amount">
							<span class="title">Input data siswa</span>
						</div>
					</div>
				</div>
	


	<div class="judul">		
		<h1></h1>
	</div>
	
	<br/>
 
	<a href="dashboard2.php">Lihat Semua Data</a>
 
	<br/>
	<h3></h3>
	<form method="post" action ="tambah_aksi2.php">		
		<table class="1">
		              
                <
            <tr>
				<td>NISN</td>
				<td><input type="NUMBER" name="NISN"></td>					
			</tr>
                	
			<tr>
				<td>NAMA_SISWA</td>
				<td><input type="text" name="NAMA_SISWA"></td>					
			</tr>
                	
			<tr>
				<td>KELAS_JURUSAN</td>
				<td><input type="text" name="KELAS_JURUSAN"></td>	
            <tr>
			
				<td></td>
				<td><input type="submit" value="Simpan"></td>				
			</tr>
            				
		</table>
	</form>

</body>
</html>