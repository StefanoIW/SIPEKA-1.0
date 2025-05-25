<?php
session_start();
if (!isset($_SESSION['id']))
{
    header('location:index.php');
    exit;
}
include "koneksi.php";
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
    <a href="page_kepsek.php">Home</a>
    <a href="page_beri_nilai_kepsek.php">Nilai Guru</a>
    <a href="page_laporan_kinerja_guru_kepsek.php">Laporan Kinerja Guru</a>
    <a href="page_jenjang_kepsek.php">Jenjang</a>
    <a href="page_profil_kepsek.php">Profil</a>
    <a href="logout.php">Logout</a>
</div>

<div class="teacher-info">
    <?php
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($id) {
        // Query untuk mengambil data dari tabel_p_kepsek berdasarkan id
        $query = "SELECT * FROM tabel_p_kepsek WHERE id = $id";
        $result = $koneksi->query($query);

        if ($result->num_rows > 0) {
            // Ambil data dari hasil query
            $row = $result->fetch_assoc();

            // Tampilkan data guru di luar tabel
            echo '<p>ID Guru: ' . $row['id'] . '</p>';
            echo '<p>Nama Guru: ' . $row['Nama'] . '</p>';

            // Tampilkan data dalam bentuk tabel
            echo '<div class="container">';
            echo '<table>';
            echo '<tr><th>Kriteria</th><th>Nilai Awal</th><th>Persentase</th><th>Nilai Akhir</th></tr>';
            echo '<tr><td>A. Administrasi Perencanaan Pembelajaran</td><td>' . $row['totalka'] . '</td><td>10%</td><td>' . ($row['totalkaakhir'] ) . '</td></tr>';
            echo '<tr><td>B. Pelaksanaan Pembelajaran</td><td>' . $row['totalkb'] . '</td><td>30%</td><td>' . ($row['totalkbakhir'] ) . '</td></tr>';
            echo '<tr><td>C. Evaluasi dan Tindak Lanjut</td><td>' . $row['totalkc'] . '</td><td>10%</td><td>' . ($row['totalkcakhir'] ) . '</td></tr>';
            echo '<tr><td>D. Penilaian Kompetensi Kepribadian</td><td>' . $row['totalkd'] . '</td><td>15%</td><td>' . ($row['totalkdakhir'] ) . '</td></tr>';
            echo '<tr><td>E. Penilaian Kompetensi Kepribadian</td><td>' . $row['totalke'] . '</td><td>15%</td><td>' . ($row['totalkeakhir'] ) . '</td></tr>';
            echo '<tr><td>F. Penilaian Kompetensi Kepribadian</td><td>' . $row['totalkf'] . '</td><td>15%</td><td>' . ($row['totalkfakhir'] ) . '</td></tr>';
            echo '<tr><td>G. Penilaian Kompetensi Sosial</td><td>' . $row['totalkg'] . '</td><td>15%</td><td>' . ($row['totalkgakhir'] ) . '</td></tr>';
            echo '<tr><td>H. Penilaian Kompetensi Sosial</td><td>' . $row['totalkh'] . '</td><td>15%</td><td>' . ($row['totalkhakhir'] ) . '</td></tr>';
            echo '<tr><td>I. Penilaian Loyalitas</td><td>' . $row['totalki'] . '</td><td>20%</td><td>' . ($row['totalkiakhir'] ) . '</td></tr>';
            echo '<tr><td> Total Penilaian </td><td>' . $row['total_penilaian_kepsek'] . '</td><td>100%</td><td>' . ($row['totalakhir'] ) . '</td></tr>';
            // tambahkan baris lain sesuai kebutuhan

            echo '</table>';
            echo '</div>';
            echo '<p>Catatan Kepsek: ' . $row['catatan_kepsek'] . '</p>';

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