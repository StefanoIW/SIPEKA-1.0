<?php
include "koneksi.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Laporan Guru SDM</title>
    <style>
    body {
        background-image: url('bgnusput.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        color: white;
        text-align: center;
    }

    .navbar-sdm {
        background-color: #3498db;
        overflow: hidden;
        text-align: center;
        padding: 10px 0;
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

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: white; /* Menambahkan latar belakang putih */
    }

    table, th, td {
        border: 2px solid #349DB3;
        border-collapse: collapse;
        color: black;
    }

    th, td {
        padding: 10px;
    }
</style>

</head>

<body>
    <div class="navbar-sdm">
        <a href="page_sdm.php">Home</a>
        <a href="page_profil_sdm.php">Profil</a>
        <a href="page_beri_nilai_sdm.php">Evaluasi SDM</a>
        <a href="page_laporan_kinerja_guru_sdm.php">Laporan Kinerja Guru</a>
        <a href="logout.php">Logout</a>
    </div>
    <table border="1">
        <tr>
            <th>no</th>
            <th>tahun penilaian</th>
            <th>id</th>
            <th>nama</th>
         
            <th>total penilaian pendidikan</th>
            <th>total penilaian sdm</th>
            <th>total penilaian kepsek</th>
            <th>total nilai</th>
        </tr>
        <?php
        $no = 1;
        $tahun_pelajaran = $_POST['tahun_pelajaran'];
        $data = mysqli_query($koneksi, "SELECT 
        tabel_p_sdm.tahun_penilaian, 
        tabel_p_pendidikan2.tahun_penilaian, 
        tabel_p_kepsek.tahun_penilaian, 
        tabel_jabatan.id, 
        tabel_jabatan.nama, 
        tabel_jabatan.jabatan, 
        tabel_p_pendidikan2.nilai, 
        tabel_p_sdm.total_penilaian_sdm, 
        tabel_p_kepsek.total_penilaian_kepsek, 
        tabel_p_kepsek.totalakhir,
        tabel_p_kepsek.catatan_kepsek
    FROM tabel_jabatan
    LEFT JOIN tabel_p_pendidikan2 ON tabel_jabatan.id = tabel_p_pendidikan2.id
    LEFT JOIN tabel_p_sdm ON tabel_jabatan.id = tabel_p_sdm.id
    LEFT JOIN tabel_p_kepsek ON tabel_jabatan.id = tabel_p_kepsek.id
    WHERE 
        jabatan = 'guru' AND 
        tabel_p_sdm.tahun_penilaian = '$tahun_pelajaran' AND 
        tabel_p_pendidikan2.tahun_penilaian = '$tahun_pelajaran' AND 
        tabel_p_kepsek.tahun_penilaian = '$tahun_pelajaran'");

        while ($d = mysqli_fetch_array($data)) {
            $totalNilai = (0.3 * $d['total_penilaian_sdm']) + (0.4 * $d['totalakhir']) + (0.3 * $d['nilai']); // Hitung total nilai dengan bobot
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['tahun_penilaian'] ?></td>
                <td><?php echo $d['id'] ?></td>
                <td><?php echo $d['nama'] ?></td>

                <td><?php echo $d['nilai'] ?></td>
                <td><?php echo $d['total_penilaian_sdm'] ?></td>
                <td><?php echo $d['totalakhir'] ?></td>
                <td><?php echo $totalNilai; ?> %</td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
