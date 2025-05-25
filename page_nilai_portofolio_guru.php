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
    <title>page guru</title>
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

        .logo {
            display: block;
            width: 200px;
            height: auto;
            margin-bottom: 20px;
        }
        .active {
            background-color: #2978a0;
            color: #fff;
        }

        .page-title {
            font-size: 24px;
            color: #fff;
            margin: 20px 0;
        }

        .center-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            font-size: 36px;
        }

        h1 {
            font-size: 50px;
            color: #3498db;
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

    <div class="teacher-info">
    <h2>ID : <?php echo $_SESSION['id']; ?></h2>
    <h2>Nama : <?php echo $_SESSION['username']; ?></h2>

    <!-- Form input untuk tahun penilaian -->
    <form method="GET">
        <label for="tahun_penilaian">Tahun Penilaian:</label>
        <input type="text" name="tahun_penilaian" id="tahun_penilaian" value="<?php echo isset($_GET['tahun_penilaian']) ? $_GET['tahun_penilaian'] : ''; ?>">
        <button type="submit">Tampilkan</button>
    </form>

<table>
        <thead>
            <tr>
                <th style="text-align: center;">Kriteria</th>
                <th style="text-align: center;">Nilai Berkas</th>
                <th style="text-align: center;">Nilai Validasi</th>
            </tr>
        </thead>
        <?php 
// Modifikasi query untuk memfilter berdasarkan tahun penilaian
$tahun_penilaian = isset($_GET['tahun_penilaian']) ? $_GET['tahun_penilaian'] : date('Y'); // Default ke tahun sekarang jika tidak ada input
$query = mysqli_query($koneksi,"SELECT * FROM tabel_p_pendidikan2 WHERE id = '$_SESSION[id]' AND tahun_penilaian = '$tahun_penilaian'");
while($data = mysqli_fetch_array($query)){
?>
        <tbody>
        <td style="text-align: center;"><?php echo "Waktu Pengisian: " . $data['TIMESTAMP']; ?></td>

            <tr>
        <td><strong>I.Pengembangan Diri</strong></td>
</tr>
<tr>
        <td><strong>A.Peningkatan Kompetensi</strong></td>
</tr>
            <tr>
            <tr>
                <td>1. Mengikuti Workshop <br>• Mengikuti kegiatan Seminar/Workshop/Pelatihan/KKG/MGMP /PMM/Komunitas Belajar
                Local</td>
                <td style="text-align: center;"><?php echo $data['poiniaa']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniaa']; ?></td>
            </tr>
            <tr>
                <td>• PMM/Komunitas Belajar</td>
                <td style="text-align: center;"><?php echo $data['poinia1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinia1']; ?></td>
            </tr>
            <tr>
            <td> • Nasional</td>
                <td style="text-align: center;"><?php echo $data['poiniab1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniab1']; ?></td>
            </tr>
            <tr>
            <td> • Internasional ( laporan dalam Bhs Inggris )</td>
                <td style="text-align: center;"><?php echo $data['poiniac1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniac1']; ?></td>
            </tr>
            <tr>
                <td>2. Implementasi pelatihan/ workshop</td>
                <td style="text-align: center;"><?php echo $data['poinia2']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinia2']; ?></td>
            </tr>
            <tr>
        <td><strong>B. Hasil Karya</strong></td>
</tr>
            <tr>
                <td>1. Karya Tulis/Buku/Modul/Penulisan artikel online bidang pendidikan menggunakan media Blog</td>
                <td style="text-align: center;"><?php echo $data['poinib1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinib1']; ?></td>
            </tr>
            <tr>
                <td>2. E-modul/E-book sesuai mata pelajaran yang diampu atau keunggulan sekolah</td>
                <td style="text-align: center;"><?php echo $data['poinib2']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinib2']; ?></td>
            </tr>
            <tr>
                <td>3. Pendekatan STEAM/STEM</td>
                <td style="text-align: center;"><?php echo $data['poinib3']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinib3']; ?></td>
                
            </tr>
            <!-- <tr>
                <td> 4. Penggunaan alat peraga</td>
                <td style="text-align: center;"><?php echo $data['poinib4']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinib4']; ?></td>
            </tr>
            <tr>
                <td>5. Publikasi pembelajaran kreatif melalui youtube</td>
                <td style="text-align: center;"><?php echo $data['poinib5']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinib5']; ?></td>
            </tr>
            <tr>
                <td>6. PTK (Penelitian Tindakan Kelas) / BP ( Best Practice )</td>
                <td style="text-align: center;"><?php echo $data['poinib6']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinib6']; ?></td>
            </tr> -->
            <td><strong>C (Support Pilar)</strong></td>
            <tr>
                <td>1.Penguasaan Bahasa Asing</td>
                <td style="text-align: center;"><?php echo $data['poinic1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinic1']; ?></td>
            </tr>
            <tr>
            <td>2. Kewirausahaan <br> • Perencanaan ( proposal )</td> 
                <td style="text-align: center;"><?php echo $data['poinic2']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinic2']; ?></td>
            </tr>
            <tr>
        
            <td>• Video presentasi siswa pembuatan produk / kegiatan perayaan</td>
                <td style="text-align: center;"><?php echo $data['poinicb2']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinicb2']; ?></td>
            </tr>
            <tr>
            <td>• Selling produk ( online / offline ) / pameran / perayaan</td>
                <td style="text-align: center;"><?php echo $data['poinicc2']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinicc2']; ?></td>
            </tr>
            <tr>
            <td>• Pelaporan kegiatan</td>
                <td style="text-align: center;"><?php echo $data['poinicd2']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinicd2']; ?></td>
            </tr>
            <td><strong>D (Mengikuti lomba sesuai kompetensinya)</strong></td>
            <tr>
            <td>1.Guru mengikuti lomba sesuai kompetensinya</td>
            <td style="text-align: center;"><?php echo $data['poinid1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinid1']; ?></td>
            </tr>
            <td><strong>E (Keaktifan Mengikuti pelatihan di PMM)</strong></td>
            <tr>
            <td>1. Guru mengikuti pengembangan diri di PMM</td>
            <td style="text-align: center;"><?php echo $data['poinie1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinie1']; ?></td>
            </tr>
             <tr>
        <td><strong>II. Pengembangan Siswa</strong></td>
</tr>
<tr>
        <td><strong>A. Kegiatan Pembimbingan Lomba Internal</strong></td>
</tr>
            <tr>
                <td>1. Kegiatan lomba internal yang diupload dalam IG pribadi guru</td>
                <td style="text-align: center;"><?php echo $data['poiniia1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniia1']; ?></td>
            </tr>
            
            <tr>
                <td>2. Pembimbing Lomba Internal (sesuai kompetensi guru) <br>• Pembimbing Peserta Lomba</td>
                <td style="text-align: center;"><?php echo $data['poiniia2']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniia2']; ?></td>
            </tr>

            <tr>
                <td>• Pembimbing Pemenang Lomba</td>
                <td style="text-align: center;"><?php echo $data['poiniiab2']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniiab2']; ?></td>
            </tr>

            <tr>
        <td><strong>B. Kegiatan Eksternal</strong></td>
</tr>
            <tr>
                <td>1. Kegiatan / lomba eksternal upload IG pribadi guru</td>
                <td style="text-align: center;"><?php echo $data['poiniib1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniib1']; ?></td>
            </tr>
            <tr>
                <td>2. Pembimbing Tampilan/Event</td>
                <td style="text-align: center;"><?php echo $data['poiniib2']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniib2']; ?></td>
            </tr>
            <tr>
            <td>2. Pembimbing Lomba Eksternal <br>• Pembimbing Peserta Lomba</td>
                <td style="text-align: center;"><?php echo $data['poiniib3']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniib3']; ?></td>
            </tr>
            <tr>
                <td>• Pembimbing Pemenang Lomba</td>
                <td style="text-align: center;"><?php echo $data['poiniiba3']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniiba3']; ?></td>
            </tr>
            <tr>
                <td>4.Pendampingan <br>• Pendamping outingclass / prakerin/ fieldtrip</td>
                <td style="text-align: center;"><?php echo $data['poiniib4']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniib4']; ?></td>
            </tr>
            <tr>
                <td>• Pendamping tampilan/event/pameran PPD/lomba eksternal</td>
                <td style="text-align: center;"><?php echo $data['poiniibb4']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniibb4']; ?></td>
            </tr>
            <tr>
                <td>• Pendamping home visit</td>
                <td style="text-align: center;"><?php echo $data['poiniibc4']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniibc4']; ?></td>
            </tr>
            <tr>
        <td><strong>III. Pengembangan Teman Sejawat</strong></td>
</tr>
<tr>
        <td><strong>A. Pendampingan Teman Sejawat</strong></td>
</tr>
            <tr>
                <td>1. Guru memberikan pendampingan kepada teman sejawat dengan durasi minimal 1 minggu untuk 2x pertemuan</td>
                <td style="text-align: center;"><?php echo $data['poiniiia1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniiia1']; ?></td>
            </tr>
            <tr>
        <td><strong>B. Sharing Internal</strong></td>
</tr>
            <tr>
                <td>1.Sharing internal dilakukan oleh guru dalam sebuah forum pertemuan.Jika guru sebagai</td>
                <td style="text-align: center;"><?php echo $data['poiniiib1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniiib1']; ?></td>
            </tr>
            <tr>
        <td><strong>C. Partisipasi Pelatihan/Kegiatan Eksternal</strong></td>
</tr>
            <tr>
                <td>1. Guru dapat berpartisipasi dalam pelatihan / kegiatan yang diselenggarakan oleh pihak eksternal / lintas jenjang.Jika guru sebagai :</td>
                <td style="text-align: center;"><?php echo $data['poiniiic1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniiic1']; ?></td>
            </tr>
</tr>
            <tr>
        <td><strong>IV. Peran Serta Di Sekolah</strong></td>
</tr>
<tr>
        <td><strong>A. Kepanitiaan Di Kegiatan Umum</strong></td>
</tr>

            <tr>
                <td>1. Guru dapat berperan serta dalam kepanitiaan di kegiatan umum. Durasi tidak lebih dari 3 bulan ( jangka pendek ).</td>
                <td style="text-align: center;"><?php echo $data['poiniva1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoiniva1']; ?></td>
            </tr>
            <tr>
        <td><strong>B. Kepanitiaan PPDB</strong></td>
</tr>

            <tr>
                <td>1. Guru dapat terlibat dalam kepanitiaan PPDB di jenjang masing2. SK diberikan oleh pimpinan jenjang yang bersangkutan.</td>
                <td style="text-align: center;"><?php echo $data['poinivb1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinivb1']; ?></td>
            </tr>
            <tr>
        <td><strong>C. Tim Pengembang Jenjang</strong></td>
</tr>
            <tr>
                <td>1. Guru dapat berperan serta dalam pengembangan di jenjangnya masing2. Dalam bentuk kegiatan maupun penugasan dalam jabatan tertentu.</td>
                <td style="text-align: center;"><?php echo $data['poinivc1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinivc1']; ?></td>
            </tr>
            <tr>
        <td><strong>D. Tim Pengembang Institusi</strong></td>
</tr>
            <tr>
                <td>1. Guru dapat berperan dalam pengembangan institusi Nusaputera secara luas, dengan durasi penugasan minimal 1 semester. Surat tugas / SK ditandatangani oleh Manajemen.</td>
                <td style="text-align: center;"><?php echo $data['poinivd1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinivd1']; ?></td>
            </tr>
            <tr>
        <td><strong>E. Supporting Unggulan Sekolah</strong></td>
</tr>
            <tr>
                <td>1. Guru dapat dilibatkan sebagai mitra dalam melayani transaksi yang tersedia, maupun sebagai pengguna aplikasi dengan berpartisipasi membeli produk yang ditawarkan. <br> • Memiliki Aplikasi My Nusaputera</td>
                <td style="text-align: center;"><?php echo $data['poinive1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinive1']; ?></td>
            </tr>

            <tr>
                <td>• Sebagai Mitra</td>
                <td style="text-align: center;"><?php echo $data['poinivea1']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinivea1']; ?></td>
            </tr>
            
            <tr>
                <td>2. Sebagai partisipan dalam pembelian produk di My Nusaputera / Mitra selama satu tahun</td>
                <td style="text-align: center;"><?php echo $data['poinive2']; ?></td>
                <td style="text-align: center;"><?php echo $data['apoinive2']; ?></td>
            </tr>
            <tr>
                <td>Total Nilai</td>
                <td style="text-align: center;"><?php echo $data['nilai']; ?></td>
                <td style="text-align: center;"><?php echo $data['nilaivalidasi']; ?></td>
            </tr>
        </tbody>
<?php
}
?>
    </table>
</div>

</body> 
</html>