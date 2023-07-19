<!DOCTYPE html>
<html>
<head>
    <title>TAMBAH DATA PANITIA</title>
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
        <h2>Form Tambah</h2>
        <form action="tambah_aksi_panitia.php" method="post">
            <label>Id Panitia</label>
            <input type="text" name="id_panitia" required>
            
            <label>Nama Panitia</label>
            <input type="text" name="nama_panitia" required>

            <tr>
			<th align="left"><label>Jenis Kelamin</label>
			<th>
			<th align="left"><input type="radio" name="jenkel" value="Laki-Laki"> Laki-Laki<br/>
			<input type="radio" name="jenkel" value="Perempuan"> Perempuan<br/>	
			</tr>	

            <label>Alamat</label>
            <textarea name="alamat" rows="4" required></textarea>
	            
            <input type = "submit" name="bok" value="Simpan"/>
            <input type = "reset" name="reset" value="Reset"/>
            <br>
            <br>
            <a href = "tampilpanitia.php">Kembali ...</a>
        </form>
    </div>
</body>
</html>