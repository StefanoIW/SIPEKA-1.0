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
    

        .navbar-sdm {
    background-color: #3498db; /* Ubah warna background ke warna sebelumnya */
    border: 1px solid #2978a0;
    padding: 10px 0;
    text-align: center; /* Posisi teks navbar di tengah */
}

        .navbar-sdm a {
            display: inline-block; /* Display links in a horizontal line */
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar-sdm a:hover {
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
        <form action="page_jenjang2_sdm.php" method="post">
            <label for="tahun_pelajaran" style="font-weight: bold; color: black;">Jenjang</label>
            <select class="form-control" name= "jenjang">
            <option value="PG/TK">PG/TK</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK1">SMK1</option>
            <option value="SMK2">SMK2</option>
            </select>
        <!-- Add a submit button -->
        <button type="submit">Submit</button>
        </form>

    </div>
</body>
</html>
