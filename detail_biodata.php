<?php include "koneksi_db.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Biodata</title>
</head>
<body>
    <h2>Detail Biodata Mahasiswa</h2>

    <?php
    if (isset($_GET['nim'])) {
        $nim = $_GET['nim'];
        $result = mysqli_query($koneksi, "SELECT * FROM biodata WHERE nim='$nim'");

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo "<p><b>NIM:</b> ".$row['nim']."</p>";
            echo "<p><b>Nama Lengkap:</b> ".$row['nama_lengkap']."</p>";
            echo "<p><b>Jenis Kelamin:</b> ".$row['jenis_kelamin']."</p>";
            echo "<p><b>Tanggal Lahir:</b> ".$row['tanggal_lahir']."</p>";
            echo "<a href='list_biodata.php'>Kembali ke Daftar</a>";
        } else {
            echo "<p>Data tidak ditemukan.</p>";
        }
    } else {
        echo "<p>NIM tidak diberikan.</p>";
    }
    ?>
</body>
</html>
