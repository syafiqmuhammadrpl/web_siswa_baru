<?php include 'koneksi.php';
if (isset($_POST['bok'])) {
	$nis = $_POST['nis'];
	$nama_siswa = $_POST['nama_siswa'];
	$jenis_kelamin = $_POST['jenkel'];
	$alamat = $_POST['alamat'];
	$asal_sekolah = $_POST['asal_sekolah'];
	$kode_progdi = $_POST['jurusan'];
	$q = "insert into siswa values('$nis', '$nama_siswa', '$jenis_kelamin', '$alamat', '$asal_sekolah',  '$kode_progdi')";
	mysqli_query($koneksi, $q);
		
	header("location:tampilsiswa.php");
}
?>