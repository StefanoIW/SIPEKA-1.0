<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('bgnusput.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .navbar-kepsek {
            background-color: #3498db; /* Warna latar belakang navbar */
            border: 1px solid #2978a0;
            padding: 10px 0;
            text-align: center; /* Posisi teks navbar di tengah */
        }

        .navbar-kepsek a {
            display: inline-block; /* Menampilkan tautan dalam satu baris horizontal */
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar-kepsek a:hover {
            background-color: #ddd; /* Warna latar belakang saat mouse hover */
            color: black;
        }

        .logo {
            height: 50px;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Latar belakang dengan opacity */
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .form-group {
            margin: 10px 0;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            background-color: #007BFF; /* Warna latar belakang tombol */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3; /* Warna latar belakang saat mouse hover */
        }
    </style>
</head>
<body>
<div class="navbar-kepsek" id="navbar-guru">
        <a href="page_kepsek.php">Home</a>
        <a href="page_profil_kepsek.php">Profil</a>
        <a href="page_beri_nilai_kepsek.php">Nilai Guru</a>
        <a href="page_laporan_kinerja_guru_kepsek.php">Laporan Kinerja Guru</a>
        <a href="page_jenjang2_kepsek.php">Jenjang</a>
        <a href="page_report_kepsek.php">Report</a>
        <a href="logout.php">Logout</a>
    </div>
    <?php
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from tabel_jabatan where id='$id'");
    while($d = mysqli_fetch_array($data)){
    ?>
    <div class="container">
        <h1>Edit Guru</h1>
        <form method="post" enctype="multipart/form-data" action="proses_update.php">
            <div class="form-group">
                <label for="id">ID :</label>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $d['id'];?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $d['nama'];?>">
            </div>
           
            <div class="form-group">
                <label for="username">Username :</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $d['username'];?>">
            </div>
            <div class "form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $d['password'];?>">
            <div class="form-group">
                <label for="jabatan">Jabatan :</label>
                <textarea id="jabatan" name="jabatan" rows="1" style="width: 100%;"><?php echo $d['jabatan'];?></textarea>
            </div>
            <div class="form-group">
            <label for="sa1">Jenjang:</label>
                <select class="form-control" id="sa1" name="sa1">
                <option value="0">TK</option>
                <option value="1" >SD</option>
                <option value="2" >SMP</option>
                <option value="3" >SMA</option>
                <option value="4" >SMK</option>
            </select>
            <br>
            <div class="form-group">
                <label for="tahunpenilaian">Angkatan :</label>
                <input type="text" class="form-control" id="tahunpenilaian" name="tahunpenilaian" value="<?php echo $d['angkatan'];?>">
            </div>
            <div class="form-group">
                <label for="matapelajaran">Mata Pelajaran :</label>
                <input type="text" class="form-control" id="matapelajaran" name="matapelajaran" value="">
            </div>
            <div class="form-group">
                <label for="berkas">Foto Profil:</label>
                <input type="file" id="berkas" name="berkas">
            </div>
            <button type="submit" class="btn">Simpan</button>
        </form>
    </div>
    <?php 
    }
    ?>
</body>
</html>
