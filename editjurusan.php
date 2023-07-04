<?php
	include 'koneksi.php';
	$kode_progdi = $_GET['k'];
	$q = "select * from jurusan where kode_progdi='$kode_progdi'";
	$ex = mysqli_query($koneksi, $q);
	$r = mysqli_fetch_array($ex);    
?>

<h3>EDIT DATA JURUSAN</h3>

<form action="edit_aksi_jurusan.php" method="post">	
	<table border="0">
		<tr>
			<th align="left"><label>Kode Progdi</label>
			<th> :
			<th align="left"><input type="text" name="kode_progdi" readonly value="<?php echo $r['kode_progdi']; ?>"/><br/>
		</tr>	

		<tr>
			<th align="left"><label>Nama Progdi</label>
			<th> :
			<th><input type="text" name="nama_progdi" value="<?php echo $r['nama_progdi']; ?>" /><br/>
		</tr>	

		<tr>			
			<th colspan="3"><input type = "submit" name="bok" value="Simpan"/>
		</tr>		
</table>
</form>
<a href = "tampiljurusan.php">Kembali ...</a>