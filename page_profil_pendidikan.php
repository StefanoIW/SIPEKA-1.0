<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Pendidikan</title>
    <link rel="stylesheet" href="styles.css"> <!-- Tautkan file CSS eksternal -->

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
            display: inline-block;
            color: white;
            padding: 14px 10px;
            text-decoration: none;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .navbar-pendidikan a:hover {
            background-color: #265C70;
        }

        .profile-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            width: 50%;
            margin: 50px auto;
            text-align: left;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .profile-container h2 {
            font-size: 28px; /* Ubah ukuran judul profil */
            margin-bottom: 20px;
        }

        .profile-info {
            display: flex;
            flex-direction: column; /* Mengatur tata letak menjadi kolom */
            align-items: left; /* Pusatkan elemen dalam kolom */
            margin: 10px 0;
        }

        .profile-info label {
    font-weight: bold;
    font-size: 23px; /* Ubah ukuran label */
}
.profile-info input {
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    font-size: 20px; /* Ubah ukuran teks input */
}

        .profile-info input:focus {
            outline: none;
        }

      
    </style>
</head>
<body>
    <?php 
    session_start();
    include "koneksi.php";
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

    <?php
    $tampilPeg = mysqli_query($koneksi, "SELECT * FROM tabel_jabatan WHERE id='$_SESSION[id]'");
    $peg = mysqli_fetch_array($tampilPeg);
    $data = mysqli_query($koneksi, "SELECT * from tabel_jabatan where username='$_SESSION[username]';");
    while ($d = mysqli_fetch_array($data)) {
        ?>
        <div class="profile-container">
            <h2>Profil Pengguna</h2>
            <div class="profile-info">
                
                <label>Username:</label>
                <input type="text" value="<?php echo $_SESSION['username'] ?>" readonly>
            </div>
            <div class="profile-info">
                <label>Nama:</label>
                <input type="text" value="<?php echo $d['nama']; ?>" readonly>
            </div>
            <div class="profile-info">
                <label>Tanggal Lahir:</label>
                <input type="text" value="<?php echo $d['tgl_lahir']; ?>" readonly>
            </div>
            <div class="profile-info">
                <label>Jabatan:</label>
                <input type="text" value="<?php echo $d['jabatan']; ?>" readonly>
            </div>
        </div>
    <?php
    }
    ?>
</body>
</html>
