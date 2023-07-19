<!DOCTYPE html>
<html>
<head>
    <title>Tabel Panitia</title>
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
	<a href = 'tambahpanitia.php' class="button"> Tambah Panitia</a>  
	<table>
		<?php
		include "koneksi.php";

		$q = "select * from panitia";
		$ex = mysqli_query($koneksi,$q);
		
		echo "<table border = 1>";
		echo "<tr>
		<th>Id Panitia</th><th>Nama Panitia</th><th>Jenis Kelamin</th>
		<th>Alamat</th><th>Action</th></tr>";

		while ($r = mysqli_fetch_array($ex)) {
			echo "<tr><td>".$r['id_panitia']."</td>";
			echo "<td>".$r['nama_panitia']."</td>";
			echo "<td>".$r['jenis_kelamin']."</td>";
			echo "<td>".$r['alamat']."</td>";	
			echo "<td><a href = 'editpanitia.php?i=".$r['id_panitia']."' class='button'>Edit</a> ";
			echo "<a href = 'hapus_panitia.php?i=".$r['id_panitia']."' class='button'>Hapus</a>";
			echo "</td></tr>";
		}
		echo "</table>";
		?>
		<br>
		<a href = "dashboard.php" class="button">Kembali</a>
	</table>
</body>
</html>