<!DOCTYPE html>
<html>
<head>
    <title>Tabel Siswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: cyan;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href = 'tambahsiswa.php' class="button"> Tambah Siswa</a>
    
    <table>    	        
        <?php
		include "koneksi.php";

		$q = "select * from siswa";
		$ex = mysqli_query($koneksi,$q);
		
		echo "<table border = 1>";
		echo "<tr>
		<th>NIS</th><th>Nama Siswa</th><th>Jenis Kelamin</th>
		<th>Alamat</th><th>Asal Sekolah</th><th>Kode Progdi</th><th>Action</th></tr>";

		while ($r = mysqli_fetch_array($ex)) {
			echo "<tr><td>".$r['nis']."</td>";
			echo "<td>".$r['nama_siswa']."</td>";
			echo "<td>".$r['jenis_kelamin']."</td>";
			echo "<td>".$r['alamat']."</td>";
			echo "<td>".$r['asal_sekolah']."</td>";
			echo "<td>".$r['kode_progdi']."</td>";			
			echo "<td><a href = 'editsiswa.php?n=".$r['nis']."' class='button'>Edit</a> ";
			echo "<a href = 'hapus_siswa.php?n=".$r['nis']."' class='button'>Hapus</a>";
			echo "</td></tr>";
		}
		echo "</table>";
		?>
		<br>
		<a href = "dashboard.php" class="button">Kembali</a>
	</table>
</body>
</html>