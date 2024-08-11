<?php

require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['ID'])) {
    $ID = $_GET['ID'];

    $query = "DELETE FROM t_kursus WHERE ID='$ID'";
    if (mysqli_query($koneksi, $query)) {
        echo 'Data kursus berhasil dihapus.';
        echo "<meta http-equiv=refresh content=2;URL='list_kursus.php'>";
    } else {
        echo 'Gagal menghapus data kursus: '.mysqli_error($koneksi);
    }
} else {
    echo 'Akses tidak sah.';
}

mysqli_close($koneksi);
