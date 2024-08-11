<?php include 'index.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kursus</title>
    <link rel="stylesheet" href="coba.css">
</head>
<body>
    <div class="">
    <h1 class="isi">Form Input Kursus</h1>
        <form action="proses_kursus.php" method="POST" class="form">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" id="judul" name="judul">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi"></textarea>
            </div>
            <div class="form-group">
                <label for="durasi">Durasi</label>
                <input type="text" id="durasi" name="durasi">
            </div>
            <div class="btn">
                <input type="reset" value="Hapus">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>
</body>
</html>