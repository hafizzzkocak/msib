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
        <form action="ubah.php" method="POST" class="form">
            <h1 class="isi">Form Ubah Data Kursus</h1>
<?php
    include 'koneksi.php';
    if (isset($_GET['ID'])) {
        $ID = $_GET['ID'];
        $sql = "SELECT * FROM t_kursus WHERE ID='$ID'";
        $result = mysqli_query($koneksi, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result); ?>
            <div class="form-group">
                <label for="ID">ID Kursus</label>
                <input type="number" id="ID" name="ID" value="<?php echo $row['ID']; ?>">
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" id="judul" name="judul" value="<?php echo $row['judul']; ?>">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi" value="<?php echo $row['deskripsi']; ?>">
            </div>
            <div class="form-group">
                <label for="durasi">Durasi</label>
                <input type="text" id="durasi" name="durasi" value="<?php echo $row['durasi']; ?>">
            </div>
<?php
        } else {
            echo 'Data kursus tidak ditemukan.';
        }
    } else {
        // Tampilkan formulir kosong untuk menambahkan data baru.
    }
?>
            <div class="btn">
                <input type="submit" value="Ubah">
                <a href="list_kursus.php" class="btn-kembali">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>