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
    <title>Beri Nilai Pendidikan</title>
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
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar-pendidikan a:hover {
            background-color: #ddd;
            color: black;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Warna putih dengan tingkat transparansi */
            margin-left: auto; /* Posisikan tabel ke tengah horizontal */
            margin-right: auto;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #3498db; /* Mengubah warna latar belakang header tabel menjadi #3498db */
            color: white; /* Warna teks pada header tabel menjadi putih */
        }

        .btn-success {
            background-color: #4CAF50; /* Warna hijau */
            color: white;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        /* CSS hover untuk tombol validasi */
        .btn-success:hover {
            background-color: #45a049; /* Warna hijau yang sedikit lebih gelap saat dihover */
        }

    </style>
</head>
<body>
<div class="navbar-pendidikan" id="navbar-guru">
        <a href="page_pendidikan.php">Home</a>
        <a href="page_profil_pendidikan.php">Profil</a>
        <a href="page_beri_nilai_pendidikan.php">Nilai Berkas</a>
        <a href="page_laporan_kinerja_guru_pendidikan.php">Laporan Kinerja Guru</a>
        <a href="page_jenjang_pendidikan.php">Nilai Jenjang</a>
        <a href="page_nilaisemua_pendidikan.php">Cek Nilai</a>
        <a href="logout.php">Logout</a>
    </div>

<table>
    <tr>
        <th>No</th>
        <th>ID guru</th>
        <th>WaktuPengisian</th>
        <th>Nama</th>
        <th>Nilai Sistem</th>
        <th>Nilai Validasi</th>
        <th>validasi</th>
        <th>tahun penilaian</th>
        <th>Action</th>
    </tr>
    <?php 
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT p.id_penilaian, j.id, j.nama, p.nilai, p.nilaivalidasi, p.validasi, p.tahun_penilaian, p.TIMESTAMP
                                     FROM tabel_jabatan j
                                     INNER JOIN tabel_p_pendidikan2 p
                                     ON j.id = p.id order by p.id asc");
    while ($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['id']; ?></td>
        <td><?php echo $d['TIMESTAMP']; ?></td> <!-- Menampilkan kolom TIMESTAMP -->
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['nilai']; ?></td>
        <td><?php echo $d['nilaivalidasi']; ?></td> <!-- Menampilkan nilai validasi -->
        <td><?php echo $d['validasi']; ?></td>
        <td><?php echo $d['tahun_penilaian']; ?></td>
        
        <td>
            <a href="page_beri_nilai_berkas_pendidikan.php?id_penilaian=<?php echo $d['id_penilaian']; ?>">
                <button class="btn btn-success"><strong>Validasi</strong></button>
            </a>
        </td>
    </tr>
    <?php 
    }
    ?>
</table>
</body>
</html>
