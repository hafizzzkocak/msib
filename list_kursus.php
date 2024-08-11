<?php include 'index.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kursus</title>
    <link rel="stylesheet" href="style.css">
    <style>
         .hafiz  {
            background-color: #4caf50; 
            color: #fff;
            padding: 14px;
            text-align: center;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<h1 class="hafiz">List Kursus</h1>
    <div class="container">
        <div class="header">
            <div class="judul">
                <h1>Data Kursus</h1>
            </div>
            <a href="form_kursus.php">Tambah</a>
        </div>
        <div class="data">
            <div class="card">
                <div class="card_ket">
                    <img src="logo.png" alt="">
                    <div class="card_title">
                    <h1></h1>
                        <p></p>
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
                                <th>Durasi</th>
                                <th colspan='2'></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        require_once 'koneksi.php';
                        $sql = 'SELECT * FROM t_kursus';
                        $result = mysqli_query($koneksi, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            $ID = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<td>'.$row['ID'].'</td>';
                                echo "<td align='left'>".$row['judul'].'</td>';
                                echo "<td align='left'>".$row['deskripsi'].'</td>';
                                echo "<td align='left'>".$row['durasi'].'</td>';
                                echo "<td><form action='ubah_kursus.php' method='get'><input type='hidden' name='ID' value='".$row['ID']."'><button type='submit' class='btn-edit'>Ubah</button></form></td>";
                                // Tombol Hapus
                                echo "<td><form action='hapus_kursus.php' method='get'><input type='hidden' name='ID' value='".$row['ID']."'><button type='submit' class='btn-hapus'>Hapus</button></form></td>";
                                echo '</tr>';
                                ++$ID;
                            }
                        } else {
                            echo "<tr><td colspan='9'>Belum ada data mahasiswa.</td></tr>";
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