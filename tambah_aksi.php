<?php include 'koneksi.php';
if (isset($_POST['bok'])) {
	$nis = $_POST['nis'];
	$nama_siswa = $_POST['nama_siswa'];
	$jenis_kelamin = $_POST['jenkel'];
	$alamat = $_POST['alamat'];
	$asal_sekolah = $_POST['asal_sekolah'];
	$kode_progdi = $_POST['kode_progdi'];
	$q = "insert into siswa values('$nis', '$nama_siswa', '$jenis_kelamin', '$alamat', '$asal_sekolah',  '$kode_progdi')";
	mysqli_query($koneksi, $q);
		
	header("location:tampilsiswa.php");
}
?>

<!-- <?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
	$nis = $_POST['nis'];
	$nama_siswa = $_POST['nama_siswa'];
	$jenis_kelamin = $_POST['jenkel'];
	$alamat = $_POST['alamat'];
	$asal_sekolah = $_POST['asal_sekolah'];
	$kode_progdi = $_POST['kode_progdi'];	
 
// menginput data ke database
mysqli_query($koneksi,"insert into siswa values('$nis', '$nama_siswa', '$jenis_kelamin', '$alamat', '$asal_sekolah',  '$kode_progdi')");
 
// mengalihkan halaman kembali ke index.php
header("location:tampilsiswa.php");
 
?> -->