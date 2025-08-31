<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>

<form method="get" action="/biodata/search">
    <input type="text" name="keyword" placeholder="Cari NIM / Nama">
    <button type="submit">Cari</button>
</form>

<a href="/biodata/tambah">+ Tambah Mahasiswa</a>

<table border="1" cellpadding="5">
    <tr>
        <th>NIM</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($biodata as $mhs): ?>
    <tr>
        <td><?= $mhs['nim']; ?></td>
        <td><?= $mhs['nama_lengkap']; ?></td>
        <td><?= $mhs['jenis_kelamin']; ?></td>
        <td><?= $mhs['tanggal_lahir']; ?></td>
        <td>
            <a href="/biodata/detail/<?= $mhs['nim']; ?>">Detail</a> | 
            <a href="/biodata/edit/<?= $mhs['nim']; ?>">Edit</a> | 
            <a href="/biodata/delete<?= $mhs['nim']; ?>" onclick="return confirm('Yakin hapus?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
