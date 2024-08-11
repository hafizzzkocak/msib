<?php include 'index.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Materi</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .hafiz {
            background-color: #4caf50;
            color: #fff;
            padding: 14px;
            text-align: center;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <h1 class="hafiz">List Materi</h1>
    <div class="container">
        <div class="header">
            <div class="judul">
                <h1>Data Materi</h1>
            </div>
            <a href="form_materi.php">Tambah</a>
        </div>
        <div class="data">
            <div class="card">
                <div class="card_ket">
                    <img src="logo.png" alt="Logo">
                    <div class="card_title">
                        <h1>ENGLISH COURSE</h1>
                        <p>INDONESIA</p>
                    </div>
                </div>
                <div class="card_isi">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Materi</th>
                                <th colspan='2'>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once 'koneksi.php';
                            $sql = 'SELECT * FROM t_materi';
                            $result = mysqli_query($koneksi, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                $ID = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr>';
                                    echo '<td>' . $ID . '</td>';
                                    echo "<td>" . $row['Judul'] . '</td>';
                                    echo "<td>" . $row['Deskripsi'] . '</td>';
                                    echo "<td><a href='" . $row['EmbedLink'] . "' target='_blank'>Lihat Video Materi</a></td>";
                                    echo "<td><form action='ubah_materi.php' method='get'><input type='hidden' name='ID' value='" . $row['ID'] . "'><button type='submit' class='btn-edit'>Ubah</button></form></td>";
                                    echo "<td><form action='hapus_materi.php' method='get'><input type='hidden' name='ID' value='" . $row['ID'] . "'><button type='submit' class='btn-hapus'>Hapus</button></form></td>";
                                    echo '</tr>';
                                    ++$ID;
                                }
                            } else {
                                echo "<tr><td colspan='7'>Belum ada data Materi.</td></tr>";
                            }

                            mysqli_close($koneksi);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
