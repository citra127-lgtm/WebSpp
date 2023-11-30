<?php
include "session.php";
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboar</title>
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
      			<a href="pembayaran2.php">
				  <i class="fa-solid fa-magnifying-glass-dollar"></i>
      				<span> Invoice</span>
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
      			<a href="">
      				
      				<span></span>
      			</a>
      		</li>
      		<li>
      			<a href="#">
      				
      				<span></span>
      			</a>
      		</li>
      		<li class="logout">
      			<a href="lon.php">
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

				<div class="tabular--wrapper">
					<h3 class="main--title>">Finance data</h3>
					<br>
					<div class="table--container">
	                

					
					<?php
					echo $_SESSION['username'];
					?>
					<br>
					<br>

					   <table>
						<thead>
						<tr>
			                 <th>NO</th>
			                 <th>NISN</th>
			                 <th>NAMA_SISWA</th>
			                 <th>KELAS_JURUSAN</th>
			                 <th>OPSI</th>
		                </tr>
                        </thead>
		                <?php 
		                include 'koneksi.php';
		                $no = 1;
		                $data = mysqli_query($koneksi,"select * from siswa");
		                while($d = mysqli_fetch_array($data)){
			        ?>
					<tbody>
			        <tr>
				        <td><?php echo $no++; ?></td>
				        <td><?php echo $d['NISN']; ?></td>
				        <td><?php echo $d['NAMA_SISWA']; ?></td>
				        <td><?php echo $d['KELAS_JURUSAN']; ?></td>
				
				    <td>
						
					    
						<a href="detail.php?NISN=<?php echo $d['NISN']; ?>"style="color:DarkCyan"><i class="fa-solid fa-circle-info"></i></a>
				    </td>
			        </tr>
						</tbody>
			    <?php 
		    }
		    ?>
		
	   </table>
	</div>
		</div>
		</div>
		</div>
		</div>

	
</body>
</html>