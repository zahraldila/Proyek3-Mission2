<?php include "koneksi_db.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Biodata (DB)</title>
</head>
<body>
    <h2>Form Biodata</h2>

    <form method="POST" action="">
        <label for="nim">NIM:</label><br>
        <input type="text" name="nim" id="nim" required><br><br>

        <label for="nama">Nama Lengkap:</label><br>
        <input type="text" name="nama_lengkap" id="nama" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="L" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="P" required> Perempuan<br><br>

        <label for="tgl">Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" id="tgl" required><br><br>

        <input type="submit" name="submit" value="Simpan">
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $nim  = $_POST['nim'];
        $nama = $_POST['nama_lengkap'];
        $jk   = $_POST['jenis_kelamin'];
        $tgl  = $_POST['tanggal_lahir'];

        // simpan ke tabel biodata
        $sql = "INSERT INTO biodata (nim, nama_lengkap, jenis_kelamin, tanggal_lahir)
                VALUES ('$nim', '$nama', '$jk', '$tgl')";

        if (mysqli_query($koneksi, $sql)) {
            echo "<p style='color:green;'>Data berhasil disimpan ke database!</p>";
            echo "<a href='list_biodata.php'>Lihat daftar mahasiswa</a>";
        } else {
            echo "<p style='color:red;'>Error: " . mysqli_error($koneksi) . "</p>";
        }
    }
    ?>

    <a href="list_biodata.php">Kembali</a>
</body>
</html>
