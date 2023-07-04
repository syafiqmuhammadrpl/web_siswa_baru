<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$kode_progdi = $_GET['k'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from jurusan where kode_progdi='$kode_progdi'");
 
// mengalihkan halaman kembali ke index.php
header("location:tampiljurusan.php");
 
?>