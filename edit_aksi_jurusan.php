<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
if (isset($_POST['bok'])) {
	$kode_progdi = $_POST['kode_progdi'];
	$nama_progdi = $_POST['nama_progdi'];	
 
// update data ke database
mysqli_query($koneksi,"update jurusan set nama_progdi='$nama_progdi' where kode_progdi='$kode_progdi'");
 }
// mengalihkan halaman kembali ke index.php
header("location:tampiljurusan.php");
 
?>