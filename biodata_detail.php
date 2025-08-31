<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h2>Detail Mahasiswa</h2>
    <p><strong>NIM:</strong> <?= $mhs['nim']; ?></p>
    <p><strong>Nama Lengkap:</strong> <?= $mhs['nama_lengkap']; ?></p>
    <p><strong>Jenis Kelamin:</strong> <?= $mhs['jenis_kelamin']; ?></p>
    <p><strong>Tanggal Lahir:</strong> <?= $mhs['tanggal_lahir']; ?></p>

    <a href="/biodata">Kembali ke daftar</a>
</body>
</html>
