<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Anda</title>
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

        .navbar-guru {
    background-color: #3498db; /* Ubah warna background ke warna sebelumnya */
    border: 1px solid #2978a0;
    padding: 10px 0;
    text-align: center; /* Posisi teks navbar di tengah */
}

        .navbar-guru ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .navbar-guru li {
            display: inline;
            margin: 0 20px;
        }

        .navbar-guru a {
            text-decoration: none;
            color: #fff;
            padding: 5px 10px;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar-guru a:hover {
            background-color: #2978a0;
            color: #fff;
            text-decoration: underline;
        }

        h2 {
            color: #3498db;
        }

        .container {
            background-color: #fff;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        img {
            max-width: 200px;
            max-height: 200px;
            border-radius: 50%;
            display: block;
            margin: 0 auto 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
        }

        input[type="text"][readonly] {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<div class="navbar-guru" id="navbar-guru">
<ul class="nav navbar-nav">
            <li class="active"><a href="page_guru.php">Home</a></li>
            <li><a href="page_profil_guru.php">Profil</a></li>
            <li><a href="page_tombolupload_guru.php">Berkas Portofolio</a></li>
            <li><a href="page_nilai_portofolio_guru.php">Nilai Portofolio</a></li>
            <li><a href="page_lihat_nilai_guru.php">Nilai Rapot</a></li>
            <li><a href="logout.php">Logout</a></li> 
        </ul>
        </div>
    <div class="container">
        <h2>Profil Anda</h2>
        <form method="post" action="page_edit_profile_guru.php">
            <div>
        <?php
        if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
            $tampilPeg = mysqli_query($koneksi, "SELECT *,YEAR (CURDATE()) - YEAR (tgl_lahir) AS usia FROM tabel_jabatan WHERE id='$_SESSION[id]' ORDER BY id DESC");
            $peg = mysqli_fetch_array($tampilPeg);
            $data = mysqli_query($koneksi, "SELECT tabel_karyawan.foto_profil, tabel_jabatan.id, tabel_jabatan.nama, tabel_jabatan.jabatan, tabel_karyawan.id, tabel_karyawan.mata_pelajaran, tabel_jabatan.jenjang, tabel_jabatan.angkatan, YEAR(CURDATE()) - YEAR(tabel_jabatan.tgl_lahir) AS usia
            FROM tabel_jabatan
            LEFT JOIN tabel_karyawan ON tabel_jabatan.id = tabel_karyawan.id
            WHERE username='$_SESSION[username]';"); 
            while ($d = mysqli_fetch_array($data)) {
        ?>
        <div>
            <label>ID:</label>
            <input type="text" name="id" value="<?php echo $_SESSION['id'] ?>" readonly>
        </div>
        <div>
            <label>Username:</label>
            <input type="text" name="username" value="<?php echo $_SESSION['username'] ?>" readonly>
        </div>
        <div>
            <label>Nama:</label>
            <input type="text" name="nama" value="<?php echo $d['nama']; ?>" readonly>
        </div>
        <div>
            <label>Tanggal Lahir:</label>
            <input type="text" name="usia" value="<?php echo $d['usia']; ?>" readonly>
        </div>
        <div>
            <label>Mata Pelajaran:</label>
            <input type="text" name="mata_pelajaran" value="<?php echo $d['mata_pelajaran']; ?>" readonly>
        </div>
        <div>
            <label>Jabatan:</label>
            <input type="text" name="jabatan" value="<?php echo $d['jabatan']; ?>" readonly>
        </div>
        <div>
            <label>Jenjang:</label>
            <input type="text" name="jenjang" value="<?php echo $d['jenjang']; ?>" readonly>
        </div>
        <div>
            <label>Tahun Mulai Tugas:</label>
            <input type="text" name="angkatan" value="<?php echo $d['angkatan']; ?>" readonly>
        </div>
            <button type="submit" name="edit">Edit</button>
        </div>
        </form>
        <?php
            }
        }
        ?>
    </div>
</body>
</html>