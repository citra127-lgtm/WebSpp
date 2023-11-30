

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboar</title>
    <link rel="stylesheet" href="dash.css">
	<link rel="stylesheet" href="link.css">
	
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

				<div class="tabular--wrapper">
					<h3 class="main--title>">Finance data</h3>
					<br>
					<div class="table--container">
	                <h4><a href="inputpembayaran.php" style="color:white"><i class="fa-solid fa-plus"></i> <i class="fa-solid fa-database"></i></a></h4>

					<br>
					

					   <table>
						<thead>
						<tr>
			                 <th>NO</th>
			                 <th>NISN</th>
			                 <th>ID_STAF_ATAU_GURU</th>
			                 <th>TANGGAL PEMBAYARAN</th>
                             <th>NOMINAL</th>
			                 <th>OPSI</th>
		                </tr>
                        </thead>
		                <?php 
		                include 'koneksi2.php';
		                $no = 1;
		                $data = mysqli_query($koneksi,"select * from pembayaran");
		                while($d = mysqli_fetch_array($data)){
			        ?>
					<tbody>
			        <tr>
				        <td><?php echo $no++; ?></td>
				        <td><?php echo $d['NISN']; ?></td>
				        <td><?php echo $d['ID_STAF_ATAU_GURU']; ?></td>
				        <td><?php echo $d['TANGGAL_PEMBAYARAN']; ?></td>
                        <td><?php echo $d['NOMINAL']; ?></td>
				
				    <td>
						
					    <a href="editpembayrn.php?ID_PEMBAYARAN=<?php echo $d['ID_PEMBAYARAN']; ?>"style="color:DarkCyan"><i class="fa-solid fa-pen-to-square"></i></a>
					    <a href="hapuspem.php?ID_PEMBAYARAN=<?php echo $d['ID_PEMBAYARAN']; ?>"style="color:DarkCyan"><i class="fa-solid fa-trash"></i></a>
						<a href="detailpem.php?NISN=<?php echo $d['NISN']; ?>"style="color:DarkCyan"><i class="fa-solid fa-circle-info"></i></a>
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