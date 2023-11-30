

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboar</title>
    <link rel="stylesheet" href="dash2.css">
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
					<div class="table--container">
						<br>
						
						
	                <h4><a href="input2.php" style="color:white"><i class="fa-solid fa-plus"></i> <i class="fa-solid fa-database"></i></a></h4>
					
					
					
</br>
</br>

					
					

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
		                include 'koneksi2.php';
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
						
					    <a href="edit2.php?id=<?php echo $d['id']; ?>"style="color:DarkCyan"><i class="fa-solid fa-pen-to-square"></i></a>
					    <a href="hapus2.php?id=<?php echo $d['id']; ?>"style="color:DarkCyan"><i class="fa-solid fa-trash"></i></a>
						<a href="detail2.php?NISN=<?php echo $d['NISN']; ?>"style="color:DarkCyan"><i class="fa-solid fa-circle-info"></i></a>
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