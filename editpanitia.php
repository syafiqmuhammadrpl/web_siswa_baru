<?php
	include 'koneksi.php';
	$id_panitia = $_GET['i'];
	$q = "select * from panitia where id_panitia=$id_panitia";
	$ex = mysqli_query($koneksi, $q);
	$r = mysqli_fetch_array($ex);    
?>

<!DOCTYPE html>
<html>
<head>
    <title>EDIT DATA PANITIA</title>
    <style>
        .form-container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }
        
        .form-container label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        .form-container input[type="text"],
        .form-container textarea
        {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        
        .form-container input[type="submit"],
        .form-container input[type="reset"]        
        {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        
        .form-container input[type="submit"]:hover,
        .form-container input[type="reset"]:hover        
        {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form Edit</h2>
        <form action="edit_aksi_panitia.php" method="post">
            <label>Id Panitia</label>
            <input type="text" name="id_panitia" readonly value="<?php echo $r['id_panitia']; ?>"/>
            
            <label>Nama Panitia</label>
            <input type="text" name="nama_panitia" value="<?php echo $r['nama_panitia']; ?>" />

            <tr>
			<th align="left"><label>Jenis Kelamin</label>
			<th>
			
  			<th align="left"><input type="radio" name="jenkel" value="Laki-Laki" <?php if($r['jenis_kelamin']=='Laki-Laki') echo 'checked'?>>Laki-laki<br/>
      		<input type="radio" name="jenkel" value="Perempuan" <?php if($r['jenis_kelamin']=='Perempuan') echo 'checked'?>>Perempuan<br/>
		</tr>			

            <label>Alamat</label>            
            <textarea name="alamat" rows="4"><?php echo $r['alamat']; ?></textarea>
	            
            <input type = "submit" name="bok" value="Simpan"/>            
            <br>
            <br>
            <a href = "tampilpanitia.php">Kembali ...</a>
        </form>
    </div>
</body>
</html>