
<?php
$servername = "localhost";
$database = "penerimaan_siswa_baru";
$username = "root";
$password = "";

// buat koneksi

$koneksi = mysqli_connect($servername, $username, $password, $database);

// cek koneksi

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Database berhasil terhubung";