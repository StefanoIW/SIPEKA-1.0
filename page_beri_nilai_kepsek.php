<?php
session_start();
if (!isset($_SESSION['id']))
{
    header('location:index.php');
    exit;
}
include "koneksi.php";
$qu = mysqli_query($koneksi, "SELECT * FROM tabel_jabatan WHERE username = '$_SESSION[username]'" );
$da = mysqli_fetch_array($qu);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beri Nilai Kepsek</title>
    <style>
        /* Add CSS styles for the centered navigation bar */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: url('bgnusput.jpg') no-repeat center center fixed;
            background-size: 100% 100%;
            background-position: center center;
            font-family: Arial, sans-serif;
        }

        .navbar-kepsek {
            background-color: #3498db;
            border: 1px solid #2978a0;
            padding: 10px 0;
            text-align: center;
        }

        .navbar-kepsek a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar-kepsek a:hover {
            background-color: #ddd;
            color: black;
        }

        h1 {
            text-align: center;
            margin-top: 20px; /* Add margin to push the title down */
            width: 50%; /* Set width of h1 */
        }

        /* Add styles for the table */
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
            background-color: rgba(255, 255, 255, 0.8);
        }

        table, th, td {
            border: 2px solid #349DB3;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Add styles for the table header */
        th {
            background-color: #3498db;
            color: white;
        }

        td {
            font-weight: bold;
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
        <a href="logout.php">Logout</a>
    </div>
    </div>

    <h1>Penilaian Guru dari Kepsek</h1>

    <table>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Jenjang</th>
            <th>Nilai</th>
            <th>Catatan</th>
            <th>tahun penilaian</th>
            <th>Opsi</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT tabel_jabatan.id, tabel_jabatan.nama, tabel_jabatan.jabatan, tabel_p_kepsek.total_penilaian_kepsek, tabel_p_kepsek.catatan_kepsek,tabel_p_kepsek.id_penilaian,tabel_p_kepsek.tahun_penilaian, tabel_jabatan.jenjang
            FROM tabel_jabatan
            LEFT JOIN tabel_p_kepsek ON tabel_jabatan.id = tabel_p_kepsek.id
            WHERE jabatan='guru'and jenjang ='$da[jenjang]';");
        
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jabatan']; ?></td>
                <td><?php echo $d['jenjang']; ?></td>
                <td><?php echo $d['total_penilaian_kepsek']; ?></td>
                <td><?php echo $d['catatan_kepsek']; ?></td>
                <td><?php echo $d['tahun_penilaian']; ?></td>
                <td>
                    <a href="page_beri_nilai_2_kepsek.php?id=<?php echo $d['id']; ?>&id_penilaian=<?php echo $d['id_penilaian']; ?>"><button class="btn btn-success">NILAI</button></a>
                </td>
            </tr>
            <?php
        }
        ?>
        </table>
        
</body>
</html>