<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Berkas</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: url('bgnusput.jpg') no-repeat center center fixed;
            background-size: cover;
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

        .active {
            background-color: #2978a0;
            color: #fff;
        }

        .container {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
            background-color: #fff;
            border-radius: 5px;
        }

        .container:hover {
            background-color: #f0f0f0;
        }

        .main-container {
            max-width: 800px;
            margin: 20px auto;
        }

        h2 {
            color: #333;
        }

        .update-button-container {
            text-align: center;
            margin: 20px 0;
        }

        .update-button-container button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            border-radius: 3px;
            transition: background-color 0.3s, color 0.3s;
        }

        .update-button-container button:hover {
            background-color: #2978a0;
            color: #fff;
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
    <?php
    session_start();
    include "koneksi.php";
    ?>
    <?php
    $currentDate = date('d-m-Y');
    $Q = mysqli_query($koneksi, "SELECT* FROM tabel_p_pendidikan2");
    $R = mysqli_fetch_array($Q);
    // Tanggal yang diizinkan untuk mengakses halaman (9 Februari setiap tahun)
    $allowedDate = date('d-m') === '12-02';
    if ($allowedDate || $R['Aktivasi'] == '1') {
    ?>
        <div class="main-container">
            <div class="update-button-container">

            </div>
            <!-- Container 1 -->
            <h2>I. Pengembangan diri sendiri</h2>
            <div class="container" onclick="window.location.href='page_beri_nilai_guru1a.php'">
                <h2>IA. Peningkatan Kompetensi</h2>
            </div>
            <div class="container" onclick="window.location.href='page_beri_nilai_guru1b.php'">
                <h2>IB. Hasil Karya</h2>
            </div>
            <div class="container" onclick="window.location.href='page_beri_nilai_guru1c.php'">
                <h2>IC. Support Pilar</h2>
            </div>
            <div class="container" onclick="window.location.href='page_beri_nilai_guru1d.php'">
                <h2>ID. Mengikuti lomba sesuai kompetensinya</h2>
            </div>
            <!-- <div class="container" onclick="window.location.href='page_upload_berkas_guru1e.php'">
                <h2>IE. Keaktifan Mengikuti pelatihan di PMM
                </h2>
            </div> -->

            <h2>II. Pengembangan Siswa</h2>
            <!-- Container 2 -->
            <div class="container" onclick="window.location.href='page_beri_nilai_guru2a.php'">
                <h2>IIA. Kegiatan Pembimbingan Lomba Internal</h2>
            </div>
            <div class="container" onclick="window.location.href='page_beri_nilai_guru2b.php'">
                <h2>IIB. Kegiatan Eksternal</h2>
            </div>

            <h2>III. Pengembangan Teman Sejawat</h2>
            <!-- Container 3 -->
            <div class="container" onclick="window.location.href='page_beri_nilai_guru3a.php'">
                <h2>IIIA. Pendampingan Teman Sejawat</h2>
            </div>
            <div class="container" onclick="window.location.href='page_beri_nilai_guru3b.php'">
                <h2>IIIB. Sharing Internal</h2>
            </div>
            <div class="container" onclick="window.location.href='page_beri_nilai_guru3c.php'">
                <h2>IIIC. Partisipasi Pelatihan / Kegiatan eksternal</h2>
            </div>

            <h2>IV. Peran Serta Di Sekolah</h2>
            <!-- Container 4 -->
            <div class="container" onclick="window.location.href='page_beri_nilai_guru4a.php'">
                <h2>IVA. Kepanitiaan Di Kegiatan Umum</h2>
            </div>
            <div class="container" onclick="window.location.href='page_beri_nilai_guru4b.php'">
                <h2>IVB. Kepanitiaan PPDB</h2>
            </div>
            <div class="container" onclick="window.location.href='page_beri_nilai_guru4c.php'">
                <h2>IVC. Tim Pengembang Jenjang</h2>
            </div>
            <div class="container" onclick="window.location.href='page_beri_nilai_guru4d.php'">
                <h2>IVD. Tim Pengembang Institusi</h2>
            </div>
            <div class="container" onclick="window.location.href='page_beri_nilai_guru4e.php'">
                <h2>IVE. Supporting Unggulan Sekolah</h2>
            </div>
        </div>
</body>
<?php
    } else {
        echo "<h2 class='text-center' style='color: red;'>*Report : Maaf, Anda tidak dapat mengakses halaman ini. Halaman ini hanya dapat diakses pada tanggal yang sudah ditentukan.</h2>";
    }
?>

</html>