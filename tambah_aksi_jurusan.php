<?php include 'koneksi.php';
if (isset($_POST['bok'])) {
	$kode_progdi = $_POST['kode_progdi'];
	$nama_progdi = $_POST['nama_progdi'];	
	$q = "insert into jurusan values('$kode_progdi', '$nama_progdi')";
	mysqli_query($koneksi, $q);
		
	header("location:tampiljurusan.php");
}
?>