<h3>TAMBAH DATA SISWA</h3>

<form action="tambah_aksi.php" method="post">	
	<table border="0">
		<tr>
			<th align="left"><label>NIS</label>
			<th> :
			<th><input type="text" name="nis"/><br/>
		</tr>	

		<tr>
			<th align="left"><label>Nama</label>
			<th> :
			<th><input type="text" name="nama_siswa"/><br/>
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
			<th align="left"><label>Asal Sekolah</label>
			<th> :
			<th><input type="text" name="asal_sekolah"/><br/>
		</tr>	

		<tr>
			<th align="left"><label>Kode Progdi</label>
			<th> :
			<th align="left"><select name="kode_progdi">
            <option value="RPL001">RPL001</option>
            <option value="TKJ002">TKJ002</option>
            <option value="SI003">SI003</option>
            <option value="AP004">AP004</option>
            <option value="MM005">MM005</option>
        	</select><br>
		</tr>	

		<tr>			
			<th colspan="3"><input type = "submit" name="bok" value="Simpan"/><input type = "reset" name="reset" value="Reset"/>
		</tr>		
</table>
</form>
<a href = "tampilsiswa.php">Kembali ...</a>