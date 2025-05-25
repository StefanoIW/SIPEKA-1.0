<?php
include "koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluasi SDM</title>
    <style>
             html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    background: url('bgnusput.jpg') no-repeat center center fixed;
    background-size: 100% 100%; /* Mengatur ukuran latar belakang sesuai halaman */
    background-position: center center;
    font-family: Arial, sans-serif;
}

        .navbar-sdm {
    background-color: #3498db; /* Ubah warna background ke warna sebelumnya */
    border: 1px solid #2978a0;
    padding: 10px 0;
    text-align: center; /* Posisi teks navbar di tengah */
}

        .navbar-sdm a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar-sdm a:hover {
            background-color: #ddd;
            color: black;
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
            font-size: 18px;
            font-weight: bold;
        }

        .form_input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 2px solid #349DB3;
            border-radius: 5px;
        }

        button {
            background-color: #349DB3;
            color: white;
            padding: 10px 20px;
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
<div class="navbar-sdm">
        <a href="page_sdm.php">Home</a>
        <a href="page_profil_sdm.php">Profil</a>
        <a href="page_beri_nilai_sdm.php">Nilai SDM</a>
        <a href="page_laporan_kinerja_guru_sdm.php">Laporan Kinerja Guru</a>
        <a href="page_jenjang_sdm.php">Jenjang</a>
        <a href="page_nilaisemua_sdm.php">Cek Nilai </a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="container">
    <form action="page_lihat_laporan_guru_sdm.php" method="post">
    <label for="tahun_pelajaran" style="font-weight: bold; color: black;">Tahun Penilaian</label>
    <input type="text" name="tahun_pelajaran" id="tahun_pelajaran" class="form_input" required="required">
    <button type="submit">Input</button>
</form>

    </div>
</body>
</html>
