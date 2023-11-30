<!DOCTYPE html>
<html>
<head>
	<title>update data</title>
	<link rel="stylesheet" href="dash.css">
	<link rel="stylesheet" href="style4.css">
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
      			<a href="#" >
      				<i class="fa-solid fa-graduation-cap"></i>
      				<span>Dashboard</span>
      			</a>
      		</li>
      		<li>
      			<a href="#">
      				<i class="fa-solid fa-user"></i>
      				<span>Profile</span>
      			</a>
      		</li>
      		<li>
      			<a href="#">
      				<i class="fa-brands fa-artstation"></i>
      				<span>Statistics</span>
      			</a>
      		</li>
      		<li>
      			<a href="#">
      				<i class="fa-solid fa-angles-right"></i>
      				<span>Careess</span>
      			</a>
      		</li>
      		<li>
      			<a href="#">
      				<i class="fa-solid fa-question"></i>
      				<span>FQA</span>
      			</a>
      		</li>
      		<li>
      			<a href="#">
      				<i class="fa-solid fa-comments"></i>
      				<span>Testimonials</span>
      			</a>
      		</li>
      		<li>
      			<a href="#">
      				<i class="fa-solid fa-gear"></i>
      				<span>Settings</span>
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
				
				
						<div class="amount">
							<span class="title">Payment amout</span>
						</div>
					</div>
				</div>

 

	<br/>
	<a href="dashboard.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA SISWA</h3>
 
	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$data= mysqli_query($koneksi,"SELECT * FROM siswa WHERE id='$id'")or die(mysql_error());
	while($d = mysqli_fetch_array($data)){
	?>
		<form method="post" action="update.php">
		
			<table class="1">
				<tr>
				<td>UPDATE DATA</td>
				<td>			
					
					<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<input type="text" name="NISN" value="<?php echo $d['NISN']; ?>">
	            </td>
				
				<tr>
					<td>NAMA_SISWA</td>
					<td><input type="text" name="NAMA_SISWA" value="<?php echo $d['NAMA_SISWA']; ?>"></td>
				</tr>
				<tr>
					<td>KELAS_JURUSAN</td>
					<td><input type="text" name="KELAS_JURUSAN" value="<?php echo $d['KELAS_JURUSAN']; ?>"></td>
	            </tr>
				<tr>
					<td></td>
					<td><input type="submit" value="simpan"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>