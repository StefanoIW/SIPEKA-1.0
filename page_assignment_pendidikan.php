<?php
include "koneksi.php";
session_start();
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

        /* Add background image to the body */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: url('bgnusput.jpg') no-repeat center center fixed;
            background-size: 100% 100%;
            background-position: center center;
            font-family: Arial, sans-serif;
        }

        /* Add CSS for the welcome message */
        .welcome-message {
            text-align: center;
            padding: 100px;
            color: #3498db;
            font-size: 24px;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            width: 90%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        /* Additional styling for the teacher info outside the table */
        .teacher-info {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>
<div class="navbar-kepsek" id="navbar-guru">

        <a href="page_pendidikan.php">Home</a>
        <a href="page_profil_pendidikan.php">Profil</a>
        <a href="page_beri_nilai_pendidikan.php">Nilai Berkas</a>
        <a href="page_laporan_kinerja_guru_pendidikan.php">Laporan Kinerja Guru</a>
        <a href="page_jenjang_pendidikan.php">Lihat Jenjang</a>
        <a href="logout.php">Logout</a>
    </div>
<div class="teacher-info">
    <?php
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($id) {
        // Query untuk mengambil data dari tabel_p_kepsek berdasarkan id
        $query = "SELECT * FROM tabel_p_pendidikan2 WHERE id = $id";
        $result = $koneksi->query($query);

        if ($result->num_rows > 0) {
            // Ambil data dari hasil query
            $row = $result->fetch_assoc();

            // Tampilkan data guru di luar tabel
            echo '<p>ID Guru: ' . $row['id'] . '</p>';
            echo '<p>Nama Guru: ' . $row['nama'] . '</p>';

            // Tampilkan data dalam bentuk tabel
            echo '<div class="container">';
            echo '<table>';
            echo '<table style="margin: 0 auto; text-align: center;">';
            echo '<tr><th>Kriteria</th><th style="text-align: center;">Skor Sistem</th><th style="text-align: center;">Skor Validasi</th></tr>';
    
    
echo '<tr><td><strong>I. Pengembangan Diri</strong></td></tr>';
echo '<tr><td><strong>A (Peningkatan Kompetensi)</strong> </td></td></tr>';
echo '<tr><td>1. Mengikuti workshop/pelatihan <br> • Mengikuti workshop/pelatihan sesuai bidang ilmu yang diampu/unggulan sekolah</td><td style="text-align: center;">' . $row['poinia1'] . '</td><td style="text-align: center;">' . $row['apoinia1'] . '</td></tr>';
echo '<tr><td>• Mengikuti workshop/pelatihan sesuai bidang ilmu yang diampu/unggulan sekolah</td><td style="text-align: center;">' . $row['poiniab1'] . '</td><td style="text-align: center;">' . $row['apoiniab1']  . '</td></tr>';
echo '<tr><td>• Mengikuti workshop/pelatihan sesuai bidang ilmu yang diampu/unggulan sekolah</td><td style="text-align: center;">' . $row['poiniac1'] . '</td><td style="text-align: center;">' . $row['apoiniac1']. '</td></tr>';
echo '<tr><td>2. Implementasi pelatihan/ workshop</td><td style="text-align: center;">' . $row['poinia2'] . '</td><td style="text-align: center;">' . $row['apoinia2']. '</td></tr>';
echo '<tr><td><strong>B (Hasil Karya)</strong></td></tr>';
echo '<tr><td>1. Karya Tulis/Buku/Modul/Penulisan artikel online bidang pendidikan menggunakan media Blog</td><td style="text-align: center;">' . $row['poinib1'] . '</td><td style="text-align: center;">' . $row['apoinib1'] . '</td></tr>';
echo '<tr><td>2. E-modul/E-book sesuai mata pelajaran yang diampu atau keunggulan sekolah</td><td style="text-align: center;">' . $row['poinib2'] . '</td><td style="text-align: center;">' . $row['apoinib2'] . '</td></tr>';
echo '<tr><td>3. Pendekatan STEAM/STEM</td><td style="text-align: center;">' . $row['poinib3'] . '</td><td style="text-align: center;">' . $row['apoinib3'] . '</td></tr>';
echo '<tr><td>4. Penggunaan alat peraga</td><td style="text-align: center;">' . $row['poinib4'] . '</td><td style="text-align: center;">' . $row['apoinib4'] . '</td></tr>';
echo '<tr><td>5. Publikasi pembelajaran kreatif melalui youtube</td><td style="text-align: center;">' . $row['poinib5'] . '</td><td style="text-align: center;">' . $row['apoinib5'] . '</td></tr>';
echo '<tr><td>6. PTK (Penelitian Tindakan Kelas) / BP ( Best Practice )</td><td style="text-align: center;">' . $row['poinib6'] . '</td><td style="text-align: center;">' . $row['apoinib6'] . '</td></tr>';
echo '<tr><td><strong>C (Support Pilar)</strong></tr>';
echo '<tr><td>1.Penguasaan Bahasa Asing</td><td style="text-align: center;">' . $row['poinic1'] . '</td><td style="text-align: center;">' . $row['apoinic1'] . '</td></tr>';
echo '<tr><td>2. Kewirausahaan <br> • Perencanaan ( proposal )</td><td style="text-align: center;">' . $row['poinic2'] . '</td><td style="text-align: center;">' . $row['apoinic2'] . '</td></tr>';
echo '<tr><td>• Video presentasi siswa pembuatan produk / kegiatan perayaan</td><td style="text-align: center;">' . $row['poinicb2'] . '</td><td style="text-align: center;">' . $row['apoinicb2'] . '</td></tr>';
echo '<tr><td>• Selling produk ( online / offline ) / pameran / perayaan</td><td style="text-align: center;">' . $row['poinicc2'] . '</td><td style="text-align: center;">' . $row['apoinicc2'] . '</td></tr>';
echo '<tr><td>• Pelaporan kegiatan</td><td style="text-align: center;">' . $row['poinicd2'] . '</td><td style="text-align: center;">' . $row['apoinicd2'] . '</td></tr>';
echo '<tr><td><strong>D (Mengikuti lomba sesuai kompetensinya)</strong></tr>';
echo '<tr><td>1.Guru mengikuti lomba sesuai kompetensinya</td><td style="text-align: center;">' . $row['poinid1'] . '</td><td style="text-align: center;">' . $row['apoinid1'] . '</td></tr>';
echo '<tr><td><strong>E (Keaktifan Mengikuti pelatihan di PMM)</strong></tr>';
echo '<tr><td>1. Keaktifan Mengikuti Pelatihan di PMM</td><td style="text-align: center;">' . $row['poinie1'] . '</td><td style="text-align: center;">' . $row['apoinie1'] . '</td></tr>';
echo '<tr><td><strong>II. Pengembangan Siswa</strong></td></tr>';
echo '<tr><td><strong>A (Kegiatan Pembimbingan Lomba Internal)</strong></tr>';
echo '<tr><td>1. Kegiatan lomba internal yang diupload dalam IG pribadi guru</td><td style="text-align: center;">' . $row['poiniia1'] . '</td><td style="text-align: center;">' . $row['apoiniia1'] . '</td></tr>';
echo '<tr><td>2. Pembimbing Lomba Internal (sesuai kompetensi guru) <br>• Pembimbing Peserta Lomba</td><td style="text-align: center;">' . $row['poiniia2'] . '</td><td style="text-align: center;">' . $row['apoiniia2'] . '</td></tr>';
echo '<tr><td>• Pembimbing Pemenang Lomba</td><td style="text-align: center;">' . $row['poiniiab2'] . '</td><td style="text-align: center;">' . $row['apoiniiab2'] . '</td></tr>';
echo '<tr><td><strong>B (Kegiatan Eksternal)</strong></tr>';
echo '<tr><td>1. Kegiatan / lomba eksternal upload IG pribadi guru</td><td style="text-align: center;">' . $row['poiniib1'] . '</td><td style="text-align: center;">' . $row['apoiniib1'] . '</td></tr>';
echo '<tr><td>2. Pembimbing Tampilan/Event</td><td style="text-align: center;">' . $row['poiniib2'] . '</td><td style="text-align: center;">' . $row['apoiniib2'] . '</td></tr>';
echo '<tr><td>3. Pembimbing Lomba <br> • Pembimbing Peserta Lomba</td><td style="text-align: center;">' . $row['poiniib3'] . '</td><td style="text-align: center;">' . $row['apoiniib3'] . '</td></tr>';
echo '<tr><td>• Pembimbing Pemenang Lomba</td><td style="text-align: center;">' . $row['poiniiba3'] . '</td><td style="text-align: center;">' . $row['apoiniiba3'] . '</td></tr>';

echo '<tr><td>4. Pendampingan <br> • Pendamping outingclass / prakerin/ fieldtrip</td><td style="text-align: center;">' . $row['poiniib4'] . '</td><td style="text-align: center;">' . $row['apoiniib4'] . '</td></tr>';
echo '<tr><td>• Pendamping tampilan/event/pameran PPD/lomba eksternal</td><td style="text-align: center;">' . $row['poiniibb4'] . '</td><td style="text-align: center;">' . $row['apoiniibb4'] . '</td></tr>';
echo '<tr><td>• Pendamping home visit</td><td style="text-align: center;">' . $row['poiniibc4'] . '</td><td style="text-align: center;">' . $row['apoiniibc4'] . '</td></tr>';
echo '<tr><td><strong>III. Pengembangan Teman Sejawat</strong></td></tr>';
echo '<tr><td><strong>A (Pendampingan Teman Sejawat)</strong></tr>';
echo '<tr><td>1. Guru memberikan pendampingan kepada teman sejawat dengan durasi minimal 1 minggu untuk 2x pertemuan</td><td style="text-align: center;">' . $row['poiniiia1'] . '</td><td style="text-align: center;">' . $row['apoiniiia1'] . '</td></tr>';
echo '<tr><td><strong>B (Sharing Internal)</strong></tr>';
echo '<tr><td>1.Sharing internal dilakukan oleh guru dalam sebuah forum pertemuan.Jika guru sebagai</td><td style="text-align: center;">' . $row['poiniiib1'] . '</td><td style="text-align: center;">' . $row['apoiniiib1'] . '</td></tr>';
echo '<tr><td><strong>C (Partisipasi Pelatihan / Kegiatan eksternal)</strong></tr>';
echo '<tr><td>1. Guru dapat berpartisipasi dalam pelatihan / kegiatan yang diselenggarakan oleh pihak eksternal / lintas jenjang.Jika guru sebagai :</td><td style="text-align: center;">' . $row['poiniiic1'] . '</td><td style="text-align: center;">' . $row['apoiniiic1'] . '</td></tr>';
echo '<tr><td><strong>IV. Peran Serta Di Sekolah</strong></td></tr>';
echo '<tr><td><strong>A (Kepanitiaan Di Kegiatan Umum)</strong></tr>';
echo '<tr><td>1. Guru dapat berperan serta dalam kepanitiaan di kegiatan umum. Durasi tidak lebih dari 3 bulan ( jangka pendek ).</td><td style="text-align: center;">' . $row['poiniva1'] . '</td><td style="text-align: center;">' . $row['apoiniva1'] . '</td></tr>';
echo '<tr><td><strong>B (Kepanitiaan PPDB)</strong></tr>';
echo '<tr><td>1. Guru dapat terlibat dalam kepanitiaan PPDB di jenjang masing2. SK diberikan oleh pimpinan jenjang yang bersangkutan.</td><td style="text-align: center;">' . $row['poinivb1'] . '</td><td style="text-align: center;">' . $row['apoinivb1'] . '</td></tr>';
echo '<tr><td><strong>C (Tim Pengembang Jenjang)</strong></tr>';
echo '<tr><td>1. Guru dapat berperan serta dalam pengembangan di jenjangnya masing2. Dalam bentuk kegiatan maupun penugasan dalam jabatan tertentu.</td><td style="text-align: center;">' . $row['poinivc1'] . '</td><td style="text-align: center;">' . $row['apoinivc1'] . '</td></tr>';
echo '<tr><td><strong>D (Tim Pengembang Institusi)</strong></tr>';
echo '<tr><td>1. Guru dapat berperan dalam pengembangan institusi Nusaputera secara luas, dengan durasi penugasan minimal 1 semester. Surat tugas / SK ditandatangani oleh Manajemen.</td><td style="text-align: center;">' . $row['poinivd1'] . '</td><td style="text-align: center;">' . $row['apoinivd1'] . '</td></tr>';
echo '<tr><td><strong>E (Supporting Unggulan Sekolah)</strong></tr>';
echo '<tr><td>1. Guru dapat dilibatkan sebagai mitra dalam melayani transaksi yang tersedia, maupun sebagai pengguna aplikasi dengan berpartisipasi membeli produk yang ditawarkan. <br> • Memiliki Aplikasi My Nusaputera</td><td style="text-align: center;">' . $row['poinive1'] . '</td><td style="text-align: center;">' . $row['apoinive1'] . '</td></tr>';
echo '<tr><td>• Sebagai Mitra</td><td style="text-align: center;">' . $row['poinivea1'] . '</td><td style="text-align: center;">' . $row['apoinivea1'] . '</td></tr>';
echo '<tr><td>2. Sebagai partisipan dalam pembelian produk di My Nusaputera / Mitra selama satu tahun</td><td style="text-align: center;">' . $row['poinive2'] . '</td><td style="text-align: center;">' . $row['apoinive2'] . '</td></tr>';
echo '<tr><td>Total Nilai</td><td style="text-align: center;">' . $row['nilai'] . '</td><td style="text-align: center;">' . $row['nilaivalidasi'] . '</td></tr>';
echo '</table>';
echo '</div>';


            // Tutup koneksi database
            $koneksi->close();
        } else {
            echo "Data tidak ditemukan.";
        }
    } else {
        echo "ID tidak valid.";
    }
    ?>
</div>

</body>
</html>