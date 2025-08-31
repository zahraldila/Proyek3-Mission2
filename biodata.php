<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Biodata</title>
</head>
<body>
    <h2>Form Biodata</h2>

    <!-- Form input -->
    <form method="POST" action="biodata.php">
        <label for="nim">NIM:</label><br>
        <input type="text" name="nim" id="nim" required><br><br>

        <label for="nama">Nama Lengkap:</label><br>
        <input type="text" name="nama_lengkap" id="nama" required><br><br>

        <label for="jk">Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="L" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="P" required> Perempuan<br><br>

        <label for="tgl">Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" id="tgl" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <hr>

    <?php
    // Kalau tombol submit diklik
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Data yang Anda Masukkan:</h3>";
        echo "NIM: " . $_POST['nim'] . "<br>";
        echo "Nama Lengkap: " . $_POST['nama_lengkap'] . "<br>";
        echo "Jenis Kelamin: " . $_POST['jenis_kelamin'] . "<br>";
        echo "Tanggal Lahir: " . $_POST['tanggal_lahir'] . "<br>";
    }
    ?>
</body>
</html>
