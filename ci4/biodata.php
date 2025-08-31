<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>

    <!-- Tampilkan flash message error umum -->
    <?php if(session()->getFlashdata('error')): ?>
        <p style="color:red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <?php $errors = session('errors'); ?>

    <form method="post" action="/biodata/store">
        <p>
            NIM: 
            <input type="text" name="nim" value="<?= old('nim') ?>">
            <?php if(isset($errors['nim'])): ?>
                <br><small style="color:red;"><?= $errors['nim'] ?></small>
            <?php endif; ?>
        </p>

        <p>
            Nama Lengkap: 
            <input type="text" name="nama_lengkap" value="<?= old('nama_lengkap') ?>">
            <?php if(isset($errors['nama_lengkap'])): ?>
                <br><small style="color:red;"><?= $errors['nama_lengkap'] ?></small>
            <?php endif; ?>
        </p>

        <p>
            Jenis Kelamin: 
            <select name="jenis_kelamin">
                <option value="">--Pilih--</option>
                <option value="L" <?= old('jenis_kelamin')=='L'?'selected':'' ?>>Laki-laki</option>
                <option value="P" <?= old('jenis_kelamin')=='P'?'selected':'' ?>>Perempuan</option>
            </select>
            <?php if(isset($errors['jenis_kelamin'])): ?>
                <br><small style="color:red;"><?= $errors['jenis_kelamin'] ?></small>
            <?php endif; ?>
        </p>

        <p>
            Tanggal Lahir: 
            <input type="date" name="tanggal_lahir" value="<?= old('tanggal_lahir') ?>">
            <?php if(isset($errors['tanggal_lahir'])): ?>
                <br><small style="color:red;"><?= $errors['tanggal_lahir'] ?></small>
            <?php endif; ?>
        </p>

        <button type="submit">Simpan</button>
    </form>

    <a href="/biodata">Kembali</a>
</body>
</html>
