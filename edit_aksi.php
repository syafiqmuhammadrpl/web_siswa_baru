<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
if (isset($_POST['bok'])) {
	$nis = $_POST['nis'];
	$nama_siswa = $_POST['nama_siswa'];
	$jenis_kelamin = $_POST['jenkel'];
	$alamat = $_POST['alamat'];
	$asal_sekolah = $_POST['asal_sekolah'];
	$kode_progdi = $_POST['jurusan'];

 
// update data ke database
mysqli_query($koneksi,"update siswa set nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', alamat='$alamat', asal_sekolah='$asal_sekolah', kode_progdi='$kode_progdi' where nis='$nis'");
 }
// mengalihkan halaman kembali ke index.php
header("location:tampilsiswa.php");
 
?>