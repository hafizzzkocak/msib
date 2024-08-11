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
        <form action="p_ubah_materi.php" method="POST" class="form">
            <h1 class="isi">Form Ubah Data Materi</h1>
<?php
    include 'koneksi.php';
    if (isset($_GET['ID'])) {
        $ID = $_GET['ID'];
        $sql = "SELECT * FROM t_materi WHERE ID='$ID'";
        $result = mysqli_query($koneksi, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result); ?>
            <div class="form-group">
                <label for="ID">ID Materi</label>
                <input type="number" id="ID" name="ID" value="<?php echo $row['ID']; ?>">
            </div>
            <div class="form-group">
                <label for="Judul">Judul</label>
                <input type="text" id="Judul" name="Judul" value="<?php echo $row['Judul']; ?>">
            </div>
            <div class="form-group">
                <label for="Deskripsi">Deskripsi</label>
                <input type="text" id="Deskripsi" name="Deskripsi" value="<?php echo $row['Deskripsi']; ?>">
            </div>
            <div class="form-group">
                <label for="EmbedLink">Link Materi</label>
                <input type="text" id="EmbedLink" name="EmbedLink" value="<?php echo $row['EmbedLink']; ?>">
            </div>
<?php
        } else {
            echo 'Data materi tidak ditemukan.';
        }
    } else {
        // Tampilkan formulir kosong untuk menambahkan data baru.
    }
?>
            <div class="btn">
                <input type="submit" value="Ubah">
                <a href="list_materi.php" class="btn-kembali">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>