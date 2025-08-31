<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form method="post" action="/biodata/update/<?= $mhs['nim']; ?>">
        <p>NIM: <b><?= $mhs['nim']; ?></b></p>
        <p>Nama Lengkap: <input type="text" name="nama_lengkap" value="<?= $mhs['nama_lengkap']; ?>"></p>
        <p>Jenis Kelamin: 
            <select name="jenis_kelamin">
                <option value="L" <?= $mhs['jenis_kelamin']=='L'?'selected':''; ?>>Laki-laki</option>
                <option value="P" <?= $mhs['jenis_kelamin']=='P'?'selected':''; ?>>Perempuan</option>
            </select>
        </p>
        <p>Tanggal Lahir: <input type="date" name="tanggal_lahir" value="<?= $mhs['tanggal_lahir']; ?>"></p>
        <button type="submit">Update</button>
    </form>
    <a href="/biodata">Kembali</a>
</body>
</html>
