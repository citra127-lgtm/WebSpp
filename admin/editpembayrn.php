<!DOCTYPE html>
<html>
<head>
	<title>update data</title>
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
				
				
						<div class="amount">
							<span class="title">Payment amout</span>
						</div>
					</div>
				</div>

 

	<br/>
	<a href="pembayaran.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA SISWA</h3>
 
	<?php 
	include "koneksi2.php";
	$ID_PEMBAYARAN = $_GET['ID_PEMBAYARAN'];
	$data= mysqli_query($koneksi,"SELECT * FROM pembayaran WHERE ID_PEMBAYARAN='$ID_PEMBAYARAN'")or die(mysql_error());
	while($d = mysqli_fetch_array($data)){
	?>
		<form method="post" action="updatepembayrn.php">
		
			<table class="1">
				<tr>
				<td>NISN</td>
				<td>			
					
					<input type="hidden" name="ID_PEMBAYARAN" value="<?php echo $d['ID_PEMBAYARAN']; ?>">
					<input type="NUMBER" name="NISN" value="<?php echo $d['NISN']; ?>">
	            </td>
				
				<tr>
					<td>ID_STAF_ATAU_GURU</td>
					<td><input type="NUMBER" name="ID_STAF_ATAU_GURU" value="<?php echo $d['ID_STAF_ATAU_GURU']; ?>"></td>
				</tr>
				<tr>
					<td>TANGGAL_PEMBAYARAN</td>
					<td><input type="DATE" name="TANGGAL_PEMBAYARAN" value="<?php echo $d['TANGGAL_PEMBAYARAN']; ?>"></td>
	            </tr>
                <tr>
					<td>NOMINAL</td>
					<td><input type="NUMBER" name="NOMINAL" value="<?php echo $d['NOMINAL']; ?>"></td>
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