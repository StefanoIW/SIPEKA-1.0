<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: url('bgnusput.jpg') no-repeat center center fixed;
            background-size: 100% 100%;
            background-position: center center;
            font-family: Arial, sans-serif;
        }

        .navbar-sdm {
            background-color: #3498db;
            border: 1px solid #2978a0;
            padding: 10px 0;
            text-align: center;
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
            background-color: white; /* Ubah warna latar belakang menjadi putih */
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            width: 90%;
        }

        table {
            width: 100%;
            border: 2px solid #349DB3;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            color: black;
            border: 2px solid #349DB3; /* Tambahkan ini agar border tetap ada */
        }

        /* Perubahan untuk tombol NILAI */
        .btn-success {
            background-color: green;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
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
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Nilai SDM</th>
                <th>Tahun penilaian</th>
                <th>Opsi</th>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT tabel_jabatan.id, tabel_jabatan.nama, tabel_jabatan.jabatan, tabel_p_sdm.total_penilaian_sdm,tabel_p_sdm.tahun_penilaian,tabel_p_sdm.id_penilaian
            FROM tabel_jabatan
            LEFT JOIN tabel_p_sdm
            ON tabel_jabatan.id = tabel_p_sdm.id
            WHERE jabatan='guru' order by tabel_jabatan.id asc;");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['id']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['jabatan']; ?></td>
                    <td><?php echo $d['total_penilaian_sdm']; ?></td>
                    <td><?php echo $d['tahun_penilaian']; ?></td>
                    <td>
                        <a href="page_beri_nilai_2_sdm.php?id=<?php echo $d['id']; ?>&id_penilaian=<?php echo $d['id_penilaian']; ?>"><button class="btn btn-success">NILAI</button></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>
