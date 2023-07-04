<?php
	include 'koneksi.php';
	$nis = $_GET['n'];
	$q = "select * from siswa where nis=$nis";
	$ex = mysqli_query($koneksi, $q);
	$r = mysqli_fetch_array($ex);    
?>

<h3>EDIT DATA SISWA</h3>

<form action="edit_aksi.php" method="post">	
	<table border="0">
		<tr>
			<th align="left"><label>NIS</label>
			<th> :
			<th align="left"><input type="text" name="nis" readonly value="<?php echo $r['nis']; ?>"/><br/>
		</tr>	

		<tr>
			<th align="left"><label>Nama</label>
			<th> :
			<th><input type="text" name="nama_siswa" value="<?php echo $r['nama_siswa']; ?>" /><br/>
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
			<th align="left"><label>Asal Sekolah</label>
			<th> :
			<th><input type="text" name="asal_sekolah" value="<?php echo $r['asal_sekolah']; ?>" /><br/>
		</tr>	

		<tr>
			<th align="left"><label>Kode Progdi</label>
			<th> :
			<th align="left"><select name="kode_progdi">				
				<option value="RPL001" <?php if ($r['kode_progdi'] == 'RPL001') echo 'selected' ?>>RPL001</option>
				<option value="TKJ002"<?php if ($r['kode_progdi'] == 'TKJ002') echo 'selected' ?>>TKJ002</option>
				<option value="SI003"<?php if ($r['kode_progdi'] == 'SI003') echo 'selected' ?>>SI003</option>
				<option value="AP004"<?php if ($r['kode_progdi'] == 'AP004') echo 'selected' ?>>AP004</option>
				<option value="MM005"<?php if ($r['kode_progdi'] == 'MM005') echo 'selected' ?>>MM005</option>
			</select>	             		     		   
		</tr>	

		<tr>			
			<th colspan="3"><input type = "submit" name="bok" value="Simpan"/>
		</tr>		
</table>
</form>
<a href = "tampilsiswa.php">Kembali ...</a>