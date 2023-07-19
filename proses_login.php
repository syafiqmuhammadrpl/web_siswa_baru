<?php
// Koneksi ke database MySQL
include 'koneksi.php';

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Ambil nilai dari input form
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk memeriksa kecocokan username dan password
$query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
$result = $koneksi->query($query);

if ($result->num_rows == 1) {
    // Login berhasil
    header("location:dashboard.php");
 

} else {
    // Login gagal
    echo "Login gagal. Periksa kembali username dan password Anda.";

    echo "<br>";
    echo "<br>";
    echo "<a href = 'index.php'>Coba Lagi ...</a>";
 
}

$koneksi->close();
?>

