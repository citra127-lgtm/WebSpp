<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba dropdown</title>
</head>
<body>
    <form>
        <label>kelas :</label>
        <input type="text" name="kelas_name" /><br />
        <select>
            <?php
                
                include('dbkoneksi.php');
                $kategories = mysqli_query($con, "Select * from kategori");
                while($c = mysqli_fetch_array($kategories)) {

            ?>
            <option value ="<?php echo $c['id'] ?>"><?php echo $c['category'] ?>
            <?php } ?>
    
</body>
</html>