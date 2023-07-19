<?php
	include 'koneksi.php';
	$nis = $_GET['n'];
	$q = "select * from siswa where nis=$nis";
	$ex = mysqli_query($koneksi, $q);
	$r = mysqli_fetch_array($ex);    
?>

<!DOCTYPE html>
<html>
<head>
    <title>EDIT DATA SISWA</title>
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
        
        .form-container input[type="submit"]              
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
        <form action="edit_aksi.php" method="post">
            <label>NIS</label>
            <input type="text" name="nis" readonly value="<?php echo $r['nis']; ?>"/><br/>
            
            <label>Nama Siswa</label>
            <input type="text" name="nama_siswa" value="<?php echo $r['nama_siswa']; ?>" /><br/>

            <tr>
			<th align="left"><label>Jenis Kelamin</label>
			<th>
			
  			<th align="left"><input type="radio" name="jenkel" value="Laki-Laki" <?php if($r['jenis_kelamin']=='Laki-Laki') echo 'checked'?>>Laki-laki<br/>
      		<input type="radio" name="jenkel" value="Perempuan" <?php if($r['jenis_kelamin']=='Perempuan') echo 'checked'?>>Perempuan<br/>
			</tr>			
			<br>

            <label>Alamat</label>
            <textarea name="alamat" rows="4"><?php echo $r['alamat']; ?></textarea><br/>

            <label>Asal Sekolah</label>
            <input type="text" name="asal_sekolah" value="<?php echo $r['asal_sekolah']; ?>" /><br/>

            <label>Program Studi</label>


            <select name="jurusan">
            <?php
            include "koneksi.php";
            //Perintah sql untuk menampilkan semua data pada tabel jurusan
            $sql="select * from jurusan";

            $hasil=mysqli_query($koneksi,$sql);
            $no=0;
            while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            $ket="";
            if (isset($_GET['jurusan'])) {
                $jurusan = trim($_GET['jurusan']);

                if ($jurusan==$data['kode_progdi'])
                {
                    $ket="selected";
                }
            }
            ?>            
            <option value="<?php echo $data['kode_progdi'];?>" <?php if ($r['kode_progdi'] == $data['kode_progdi']) echo 'selected' ?>><?php echo $data['nama_progdi'];?></option>
            <?php
    }
  ?>
        </select>
            
			<br>
			<br>
	            
            <input type = "submit" name="bok" value="Simpan"/>            
            <br>
            <br>
            <a href = "tampilsiswa.php">Kembali ...</a>
        </form>
    </div>
</body>
</html>