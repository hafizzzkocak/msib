<?php

require_once 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ID = $_POST['ID'];
    $Judul = $_POST['Judul'];
    $Deskripsi = $_POST['Deskripsi'];
    $EmbedLink = $_POST['EmbedLink'];

    $sql = "INSERT INTO t_materi (ID, Judul, Deskripsi, EmbedLink)
            VALUES ('$ID', '$Judul', '$Deskripsi', '$EmbedLink')";

    if (mysqli_query($koneksi, $sql)) {
        header('Location: list_materi.php');
        exit();
    } else {
        echo 'Error: '.$sql.'<br>'.mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}
