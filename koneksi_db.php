<?php
$host = "localhost";   // biasanya localhost
$user = "root";        // default user XAMPP
$pass = "";            // default kosong di XAMPP
$db   = "mahasiswa";     // nama database kamu

$koneksi = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
