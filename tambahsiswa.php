<!DOCTYPE html>
<html>
<head>
    <title>TAMBAH DATA SISWA</title>
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
        <form action="tambah_aksi.php" method="post">
            <label>NIS</label>
            <input type="text" name="nis" required>
            
            <label>Nama Siswa</label>
            <input type="text" name="nama_siswa" required>

            <tr>
			<th align="left"><label>Jenis Kelamin</label>
			<th>
			<th align="left"><input type="radio" name="jenkel" value="Laki-Laki"> Laki-Laki<br/>
			<input type="radio" name="jenkel" value="Perempuan"> Perempuan<br/>	
			</tr>	
			<br>		

            <label>Alamat</label>
            <textarea name="alamat" rows="4" required></textarea>

            <label>Asal Sekolah</label>
            <input type="text" name="asal_sekolah" required>
            
            <label>Program Studi</label>
            <?php            
            include 'koneksi.php';
                            
                $query = "SELECT * FROM jurusan";
                $result = $koneksi->query($query);


               echo '<select name="jurusan">';
                while ($row = $result->fetch_assoc()) {
                    $kode_progdi = $row['kode_progdi'];
                    $nama_progdi = $row['nama_progdi'];
                    echo '<option value="' . $kode_progdi . '">' . $nama_progdi . '</option>';
                }
                echo '</select><br>';
                ?>
        
            <br>
            <input type = "submit" name="bok" value="Simpan"/>
            <input type = "reset" name="reset" value="Reset"/>
            <br>
            <br>
            <a href = "tampilsiswa.php">Kembali ...</a>
        </form>
    </div>
</body>
</html>