<?php
include "koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Kepsek</title>
    <style>
        /* Add CSS styles for the centered navigation bar */
        .navbar-kepsek {
            background-color: #3498db;
            border: 1px solid #2978a0;
            padding: 10px 0;
            text-align: center;
        }

        .navbar-kepsek a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar-kepsek a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Add background image to the body */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: url('bgnusput.jpg') no-repeat center center fixed;
            background-size: 100% 100%;
            background-position: center center;
            font-family: Arial, sans-serif;
        }

        /* Add CSS for the welcome message */
        .welcome-message {
            text-align: center;
            padding: 100px;
            color: #3498db;
            font-size: 24px;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            width: 90%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        /* Additional styling for the teacher info outside the table */
        .teacher-info {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>
<div class="navbar-kepsek" id="navbar-guru">

        <a href="page_sdm.php">Home</a>
        <a href="page_profil_sdm.php">Profil</a>
        <a href="page_beri_nilai_sdm.php">Nilai SDM</a>
        <a href="page_laporan_kinerja_guru_sdm.php">Laporan Kinerja Guru</a>
        <a href="page_jenjang_sdm.php">Jenjang</a>
        <a href="logout.php">Logout</a>
    </div>
<div class="teacher-info">
    <?php
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($id) {
        // Query untuk mengambil data dari tabel_p_kepsek berdasarkan id
        $query = "SELECT * FROM tabel_p_sdm WHERE id = $id";
        $result = $koneksi->query($query);

        if ($result->num_rows > 0) {
            // Ambil data dari hasil query
            $row = $result->fetch_assoc();

            // Tampilkan data guru di luar tabel
            echo '<p>ID Guru: ' . $row['id'] . '</p>';
            echo '<p>Nama Guru: ' . $row['nama'] . '</p>';

            // Tampilkan data dalam bentuk tabel
            echo '<div class="container">';
            echo '<table>';
            echo '<tr><th>Kriteria</th><th>Skor Awal</th><th>Skor Akhir</th></tr>';
            echo '<tr><td>A. Absensi</td><td>' . $row['s1'] . '</td><td>' . ($row['s1'] * 0.1) . '</td></tr>';
            echo '<tr><td>B. Pemakaian Seragam</td><td>' . $row['s2'] . '</td><td>' . ($row['s2'] * 0.3) . '</td></tr>';
            echo '<tr><td>C. Pemakaian buku ijin</td><td>' . $row['s3'] . '</td><td>' . ($row['s3'] * 0.1) . '</td></tr>';
            echo '<tr><td>D. Ijin pribadi</td><td>' . $row['s4'] . '</td><td>' . ($row['s4'] * 0.15) . '</td></tr>';
            echo '<tr><td>Total Penilaian</td><td>' . $row['total_penilaian_sdm'] . '</td></tr>';
            // tambahkan baris lain sesuai kebutuhan

            echo '</table>';
            echo '</div>';
          

            // Tutup koneksi database
            $koneksi->close();
        } else {
            echo "Data tidak ditemukan.";
        }
    } else {
        echo "ID tidak valid.";
    }
    ?>
</div>

</body>
</html>