<h3>TAMBAH DATA PANITIA</h3>

<form action="tambah_aksi_panitia.php" method="post">	
	<table border="0">
		<tr>
			<th align="left"><label>Id Panitia</label>
			<th> :
			<th><input type="text" name="id_panitia"/><br/>
		</tr>	

		<tr>
			<th align="left"><label>Nama Panitia</label>
			<th> :
			<th><input type="text" name="nama_panitia"/><br/>
		</tr>	

		<tr>
			<th align="left"><label>Jenis Kelamin</label>
			<th> :
			<th align="left"><input type="radio" name="jenkel" value="Laki-Laki"> Laki-Laki<br/>
			<input type="radio" name="jenkel" value="Perempuan"> Perempuan<br/>	
		</tr>			

		<tr>
			<th align="left"><label>Alamat</label>
			<th> :
			<th><textarea name="alamat"></textarea><br/>
		</tr>			

		<tr>			
			<th colspan="3"><input type = "submit" name="bok" value="Simpan"/><input type = "reset" name="reset" value="Reset"/>
		</tr>		
</table>
</form>
<a href = "tampilpanitia.php">Kembali ...</a>