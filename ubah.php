<?php

require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ID = $_POST['ID'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $durasi = $_POST['durasi'];

    $sql = "UPDATE t_kursus 
            SET judul='$judul', deskripsi='$deskripsi', durasi='$durasi' 
            WHERE ID='$ID'";

    if (mysqli_query($koneksi, $sql)) {
        header('Location: list_kursus.php');
        exit();
    } else {
        echo 'Error: '.$sql.'<br>'.mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}
