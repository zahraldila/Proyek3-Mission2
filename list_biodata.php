<?php include "koneksi_db.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>List Biodata</title>
</head>
<body>
    <h2>Daftar Biodata Mahasiswa</h2>

    <a href="biodata_db.php">+ Tambah Data</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Aksi</th>
        </tr>

        <?php
        $result = mysqli_query($koneksi, "SELECT * FROM biodata ORDER BY nama_lengkap ASC");
        $no = 1;

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$no++."</td>
                        <td>".$row['nim']."</td>
                        <td>".$row['nama_lengkap']."</td>
                        <td><a href='detail_biodata.php?nim=".$row['nim']."'>Detail</a></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Belum ada data.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
