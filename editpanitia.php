<?php
	include 'koneksi.php';
	$id_panitia = $_GET['i'];
	$q = "select * from panitia where id_panitia=$id_panitia";
	$ex = mysqli_query($koneksi, $q);
	$r = mysqli_fetch_array($ex);    
?>

<h3>EDIT DATA PANITIA</h3>

<form action="edit_aksi_panitia.php" method="post">	
	<table border="0">
		<tr>
			<th align="left"><label>Id Panitia</label>
			<th> :
			<th align="left"><input type="text" name="id_panitia" readonly value="<?php echo $r['id_panitia']; ?>"/><br/>
		</tr>	

		<tr>
			<th align="left"><label>Nama</label>
			<th> :
			<th><input type="text" name="nama_panitia" value="<?php echo $r['nama_panitia']; ?>" /><br/>
		</tr>	

		<tr>
			<th align="left"><label>Jenis Kelamin</label>
			<th> :
			
  			<th align="left"><input type="radio" name="jenkel" value="Laki-Laki" <?php if($r['jenis_kelamin']=='Laki-Laki') echo 'checked'?>>Laki-laki<br/>
      		<input type="radio" name="jenkel" value="Perempuan" <?php if($r['jenis_kelamin']=='Perempuan') echo 'checked'?>>Perempuan<br/>
		</tr>			

		<tr>
			<th align="left"><label>Alamat</label>
			<th> :
			<th><textarea name="alamat"><?php echo $r['alamat']; ?></textarea><br/>
		</tr>			

		<tr>			
			<th colspan="3"><input type = "submit" name="bok" value="Simpan"/>
		</tr>		
</table>
</form>
<a href = "tampilpanitia.php">Kembali ...</a>