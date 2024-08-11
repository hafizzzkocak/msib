<?php include 'index.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Materi</title>
    <link rel="stylesheet" href="coba.css">
</head>
<body>
    <div class="">
    <h1 class="isi">Form Input Data Materi</h1>
        <form action="proses_materi.php" method="POST" class="form">
            <div class="form-group">
                <label for="ID">ID_Kursus</label>
                <input type="number" id="ID" name="ID">
            </div>
            <div class="form-group">
                <label for="Judul">Judul</label>
                <input type="text" id="Judul" name="Judul">
            </div>
            <div class="form-group">
                <label for="Deskripsi">Deskripsi</label>
                <textarea id="Deskripsi" name="Deskripsi"></textarea>
            </div>
            <div class="form-group">
                <label for="EmbedLink">Link Materi</label>
                <input type="text" id="EmbedLink" name="EmbedLink">
            </div>
            <div class="btn">
                <input type="reset" value="Hapus">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>
</body>
</html>
