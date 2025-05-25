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
    background-color: #3498db; /* Ubah warna background ke warna sebelumnya */
    border: 1px solid #2978a0;
    padding: 10px 0;
    text-align: center; /* Posisi teks navbar di tengah */
}

        .navbar-kepsek a {
            display: inline-block; /* Display links in a horizontal line */
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
    background-size: 100% 100%; /* Mengatur ukuran latar belakang sesuai halaman */
    background-position: center center;
    font-family: Arial, sans-serif;
}

       

        /* Add CSS for the welcome message */
        .welcome-message {
            text-align: center;
            padding: 100px; /* Adjust padding as needed */
            color: #3498db;
            font-size: 24px; /* Adjust the font size as needed */
        }
        .container {
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            width: 90%;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-size: 20px;
            font-weight: bold;
        }

        select, input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 3px solid #ccc;
        border-radius: 2px;
        margin-top: 2px;
        }

        button {
            background-color: #349DB3;
            color: white;
            padding: 10px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2A7A93;
        }
    </style>
</head>
<body>
<div class="navbar-kepsek" id="navbar-guru">
        <a href="page_admin.php">Home</a>
        <a href="page_register_admin.php">Register Guru</a>
        <a href="page_edit_admin.php">Edit Guru</a>
        <a href="page_jenjang_admin.php">Jenjang</a>
        <a href="page_setting_admin.php">Pengaturan Waktu</a>
        <a href="logout.php">Logout</a>
        
    </div>
    <div>
    <?php
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($id) {
        // Query untuk mengambil data dari tabel_p_kepsek berdasarkan id
        $query = "SELECT * FROM tabel_p_kepsek WHERE id = $id";
        $result = $koneksi->query($query);

        if ($result->num_rows > 0) {
            // Ambil data dari hasil query
            $row = $result->fetch_assoc();
            

            // Tampilkan data dalam bentuk tabel
            echo '<div class="container">';
            echo '<table>';
            echo '<tr><td>ID</td><td>' . $row['id'] . '</td></tr>';
            echo '<tr><td>Nama Guru</td><td>' . $row['Nama'] . '</td></tr>';
            echo '<tr><td>TotalPenilaian Kepsek</td><td>' . $row['total_penilaian_kepsek'] . '</td></tr>';
            echo '<tr><td>A. Administrasi Perencanaan Pembelajaran :</td><td>' . $row['totalka'] . '</td></tr>';
            echo '<tr><td>B. Pelaksanaan Pembelajaran :</td><td>' . $row['totalkb'] . '</td></tr>';
            echo '<tr><td>C. Evaluasi dan Tindak Lanjut :</td><td>' . $row['totalkc'] . '</td></tr>';
            echo '<tr><td>D.Penilaian Kompetensi Kepribadian :</td><td>' . $row['totalkd'] . '</td></tr>';
            echo '<tr><td>E.Menunjukkan Pribadi yang teladan dan dewasa :</td><td>' . $row['totalke'] . '</td></tr>';
            echo '<tr><td>F. Etos Kerja, tanggung jawab yang tinggi dan rasa bangga menjadi guru :</td><td>' . $row['totalkf'] . '</td></tr>';
            echo '<tr><td>G. Bersikap inklusif, bertindak objektif, serta tidak diskriminatif :</td><td>' . $row['totalkg'] . '</td></tr>';
            echo '<tr><td>H. Komunikasi dengan sesama guru, tenaga pendidik, orang tua peserta didik dan masyarakat :</td><td>' . $row['totalkh'] . '</td></tr>';
            echo '<tr><td>I. Penilaian loyalitas :</td><td>' . $row['totalki'] . '</td></tr>';
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
