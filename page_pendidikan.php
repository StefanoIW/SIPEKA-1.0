<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page pendidikan</title>
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

        .navbar-pendidikan {
    background-color: #3498db; /* Ubah warna background ke warna sebelumnya */
    border: 1px solid #2978a0;
    padding: 10px 0;
    text-align: center; /* Posisi teks navbar di tengah */
}

        .navbar-pendidikan a {
            display: inline-block; /* Display links in a horizontal line */
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar-pendidikan a:hover {
            background-color: #ddd;
            color: black;
        }

        .active {
            background-color: #2978a0; /* Warna latar belakang biru yang lebih gelap untuk item aktif */
            color: #fff; /* Warna teks putih untuk item aktif */
        }
        .welcome-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .welcome-box h1 {
            font-size: 50px;
            color: #3498db;
            margin-bottom: 20px;
        }
        .sipeka-text {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            font-size: 24px;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <?php 
    session_start();
    ?>
      <div class="navbar-pendidikan" id="navbar-guru">
    <a href="page_pendidikan.php">Home</a>
        <a href="page_profil_pendidikan.php">Profil</a>
        <a href="page_beri_nilai_pendidikan.php">Nilai Berkas</a>
        <a href="page_laporan_kinerja_guru_pendidikan.php">Laporan Kinerja Guru</a>
        <a href="page_jenjang_pendidikan.php">Nilai Jenjang</a>
        <a href="page_nilaisemua_pendidikan.php">Cek Nilai</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="welcome-box">
        <h1>Selamat Datang</h1>
        <div class="sipeka-text">SI-PEKA</div>
    </div>
    
</body>
</html>
