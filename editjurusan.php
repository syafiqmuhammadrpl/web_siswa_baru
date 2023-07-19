<?php
	include 'koneksi.php';
	$kode_progdi = $_GET['k'];
	$q = "select * from jurusan where kode_progdi='$kode_progdi'";
	$ex = mysqli_query($koneksi, $q);
	$r = mysqli_fetch_array($ex);    
?>

<!DOCTYPE html>
<html>
<head>
    <title>EDIT DATA JURUSAN</title>
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
        
        .form-container input[type="text"]
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
        <form action="edit_aksi_jurusan.php" method="post">	
            <label for="kode_progdi">Kode Progdi</label>
            <input type="text" name="kode_progdi" readonly value="<?php echo $r['kode_progdi']; ?>"/>
            
            <label for="nama_progdi">Nama Progdi</label>
            <input type="text" name="nama_progdi" value="<?php echo $r['nama_progdi']; ?>"/>          
            
            <input type = "submit" name="bok" value="Simpan"/>            
            <br>
            <br>
            <a href = "tampiljurusan.php">Kembali ...</a>
        </form>
    </div>
</body>
</html>