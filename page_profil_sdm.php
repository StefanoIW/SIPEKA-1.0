<?php
include "koneksi.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil SDM</title>
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
            text-align: left;
        }

        .container label {
            font-weight: bold;
            color: black;
        }

        .container input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 2px solid #349DB3;
            border-radius: 5px;
            font-weight: bold;
        }

        .container div {
            margin-top: 10px;
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
        <?php
        $tampilPeg = mysqli_query($koneksi, "SELECT * FROM tabel_jabatan WHERE id='$_SESSION[id]'");
        $peg = mysqli_fetch_array($tampilPeg);
        $data = mysqli_query($koneksi, "SELECT * from tabel_jabatan where username='$_SESSION[username]';");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <div>
                <label> Username: </label>
                <input type="text" value="<?php echo $_SESSION['username'] ?>" readonly>
            </div>
            <div>
                <label> Nama: </label>
                <input type="text" value="<?php echo $d['nama']; ?>" readonly>
            </div>
            <div>
                <label> tanggal lahir: </label>
                <input type="text" value="<?php echo $d['tgl_lahir']; ?>" readonly>
            </div>
            <div>
                <label> Jabatan: </label>
                <input type="text" value="<?php echo $d['jabatan']; ?>" readonly>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>
