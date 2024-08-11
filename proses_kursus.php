<?php

require_once 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $durasi = $_POST['durasi'];

    $sql = "INSERT INTO t_kursus (judul, deskripsi, durasi)
            VALUES ('$judul', '$deskripsi', '$durasi')";

    if (mysqli_query($koneksi, $sql)) {
        header('Location: list_kursus.php');
        exit();
    } else {
        echo 'Error: '.$sql.'<br>'.mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}
