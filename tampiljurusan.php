<!DOCTYPE html>
<html>
<head>
    <title>Tabel Jurusan</title>
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
	<a href = 'tambahjurusan.php' class="button"> Tambah Jurusan</a>  
	<table>
		<?php
		include "koneksi.php";

		$q = "select * from jurusan";
		$ex = mysqli_query($koneksi,$q);
		
		echo "<table border = 1>";
		echo "<tr>
		<th>Kode Progdi</th><th>Nama Progdi</th><th>Action</th></tr>";

		while ($r = mysqli_fetch_array($ex)) {
			echo "<tr><td>".$r['kode_progdi']."</td>";
			echo "<td>".$r['nama_progdi']."</td>";	
			echo "<td><a href = 'editjurusan.php?k=".$r['kode_progdi']."' class='button'>Edit</a> ";
			echo "<a href = 'hapus_jurusan.php?k=".$r['kode_progdi']."' class='button'>Hapus</a>";
			echo "</td></tr>";
		}
		echo "</table>";
		?>
		<br>
		<a href = "dashboard.php" class="button">Kembali</a>
	</table>
</body>
</html>