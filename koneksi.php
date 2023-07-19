
<?php
$servername = "sql307.infinityfree.com";
$database = "if0_34551565_penerimaan_siswa_baru";
$username = "if0_34551565";
$password = "hB9KoDNHhORa";

// buat koneksi

$koneksi = mysqli_connect($servername, $username, $password, $database);

// cek koneksi

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Database berhasil terhubung";