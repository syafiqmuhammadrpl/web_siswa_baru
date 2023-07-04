<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_panitia = $_GET['i'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from panitia where id_panitia='$id_panitia'");
 
// mengalihkan halaman kembali ke index.php
header("location:tampilpanitia.php");
 
?>