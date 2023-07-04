<?php include 'koneksi.php';
if (isset($_POST['bok'])) {
	$id_panitia = $_POST['id_panitia'];
	$nama_panitia = $_POST['nama_panitia'];
	$jenis_kelamin = $_POST['jenkel'];
	$alamat = $_POST['alamat'];	
	$q = "insert into panitia values('$id_panitia', '$nama_panitia', '$jenis_kelamin', '$alamat')";
	mysqli_query($koneksi, $q);
		
	header("location:tampilpanitia.php");
}
?>