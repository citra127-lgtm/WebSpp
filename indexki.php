<!DOCTYPE html>
<html>
<head>
	<title>DATA SPP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="lthn.css">
	<link rel="stylesheet"
	      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

</head>

<body bgcolor="grey">


	<h2>DATA SISWA</h2>
	<a href="input.php">+ tambah data</a>
	<table border="1"  style="margin-left: auto; margin-right: auto;>
		<table class="table1">
		<tr>
			<th>NO</th>
			<th>NISN</th>
			<th>NAMA_SISWA</th>
			<th>KELAS_JURUSAN</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from siswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['NISN']; ?></td>
				<td><?php echo $d['NAMA_SISWA']; ?></td>
				<td><?php echo $d['KELAS_JURUSAN']; ?></td>
				
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	   </table>
	</table>
</body>
</html>