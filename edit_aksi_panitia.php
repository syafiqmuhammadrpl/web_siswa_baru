<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
if (isset($_POST['bok'])) {
	$id_panitia = $_POST['id_panitia'];
	$nama_panitia = $_POST['nama_panitia'];
	$jenis_kelamin = $_POST['jenkel'];
	$alamat = $_POST['alamat'];	
 
// update data ke database
mysqli_query($koneksi,"update panitia set nama_panitia='$nama_panitia', jenis_kelamin='$jenis_kelamin', alamat='$alamat' where id_panitia='$id_panitia'");
 }
// mengalihkan halaman kembali ke index.php
header("location:tampilpanitia.php");
 
?>