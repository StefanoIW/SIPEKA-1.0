<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Kepsek</title>

    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Center-align the navbar */
        html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    background: url('bgnusput.jpg') no-repeat center center fixed;
    background-size: 100% 100%; /* Mengatur ukuran latar belakang sesuai halaman */
    background-position: center center;
    font-family: Arial, sans-serif;
}

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

        /* Styling for the container */
        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Add some opacity for readability */
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .container h1 {
            color: #349DB3; /* Match the navbar color for consistency */
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 18px;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #349DB3;
            border: none;
            padding: 10px 20px;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #2978A0;
        }
        .bottom-container {
    background-color: #3498db;
    border-radius: 10px;
    padding: 20px;
    text-align: center; /* Memposisikan teks ke tengah */
    margin: 100px auto;
    width: 50%;
    display: flex; /* Menggunakan flexbox untuk mengatur pusat vertikal dan horizontal */
    flex-direction: column;
    justify-content: center;
    align-items: center;
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
    <div class="bottom-container">
    <form action="proses_setting_admin.php" method="post" class="form-inline">
        <div class="form-group">
            <label style="font-weight: bold; color: black;">Awali Penilaian</label>
            <button type="submit">Aktif</button>
        </div>
    </form>
    <form action="proses_setting2_admin.php" method="post" class="form-inline">
        <div class="form-group">
            <label style="font-weight: bold; color: black;">Ahkiri Penilaian</label>
            <button type="submit">Non-Aktif</button>
        </div>
        
    </form>
    <form method="POST" action="proses_update_nilai.php">
    <label style="font-weight: bold; color: black;">Update Nilai</label>
        <button type="submit" name="update_nilai">Update Nilai</button>
    </form>
</div>
</body>
