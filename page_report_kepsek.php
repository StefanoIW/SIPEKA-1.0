<?php 
    session_start();
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Kepsek</title>
    <style>
        /* Add CSS styles for the centered navigation bar */
    

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

        /* Add background image to the body */
        html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    background: url('bgnusput.jpg') no-repeat center center fixed;
    background-size: 100% 100%; /* Mengatur ukuran latar belakang sesuai halaman */
    background-position: center center;
    font-family: Arial, sans-serif;
}
h1 {
            text-align: center;
            margin-top: 20px; /* Add margin to push the title down */
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
        <a href="page_report_kepsek.php">Report</a>
        <a href="logout.php">Logout</a>
    </div>

    <h1>HASIL REPORT</h1>

<table>
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama Guru</th>
        <th>Keterangan</th>
        <th>Skor Maksimal</th>
        <th>Nilai penilai 1</th>
        <th>Catatan</th>
    </tr>
    
    <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT tabel_jabatan.id, tabel_jabatan.nama, tabel_jabatan.jabatan, tabel_p_kepsek.total_penilaian_kepsek, tabel_p_kepsek.catatan_kepsek,tabel_p_kepsek.id_penilaian,tabel_p_kepsek.tahun_penilaian
            FROM tabel_jabatan
            LEFT JOIN tabel_p_kepsek ON tabel_jabatan.id = tabel_p_kepsek.id;");
        
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id']; ?></td> 
                <td><?php echo $d['nama']; ?></td>
                <td>1. Administrasi Perencanaan Pembelajaran <br>
                    2. Pelaksanaan Pembelajaran <br>
                    3. Evaluasi dan Tindak Lanjut <br>
                    4. Penilaian Kompetnsi Kepribadian <br>
                    5. Menunjukkan Pribadi yang teladan dan dewasa <br>
                    6. Etos Kerja, tanggung jawab yang tinggi dan rasa bangga menjadi guru <br>
                    7. Bersikap inklusif, bertindak objektif, serta tidak diskriminatif <br>
                    8. Komunikasi dengan sesama guru, tenaga pendidik, orang tua peserta didik dan masyarakat <br> 
                    9. Penilaian loyalitas </td>
                <td> <?$_POST['ka1'];?> </td>
                <td><?php echo $d['total_penilaian_kepsek']; ?></td>
                <td><?php echo $d['catatan_kepsek']; ?></td>
                
            </tr>
            <?php
        }
        ?>