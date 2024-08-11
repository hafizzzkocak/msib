<?php

require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ID = $_POST['ID'];
    $Judul = $_POST['Judul'];
    $Deskripsi = $_POST['Deskripsi'];
    $EmbedLink = $_POST['EmbedLink'];

    $sql = "UPDATE t_materi 
            SET Judul='$Judul', Deskripsi='$Deskripsi', EmbedLink='$EmbedLink' 
            WHERE ID='$ID'";

    if (mysqli_query($koneksi, $sql)) {
        header('Location: list_materi.php');
        exit();
    } else {
        echo 'Error: '.$sql.'<br>'.mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}
