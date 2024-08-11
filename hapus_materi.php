<?php

require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['ID'])) {
    $ID = $_GET['ID'];

    $query = "DELETE FROM t_materi WHERE ID='$ID'";
    if (mysqli_query($koneksi, $query)) {
        echo 'Data materi berhasil dihapus.';
        echo "<meta http-equiv=refresh content=2;URL='list_materi.php'>";
    } else {
        echo 'Gagal menghapus data materi: '.mysqli_error($koneksi);
    }
} else {
    echo 'Akses tidak sah.';
}

mysqli_close($koneksi);
