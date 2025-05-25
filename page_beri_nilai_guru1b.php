<?php
include "koneksi.php";
session_start();
$tahun_ini = date("Y");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Guru</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: url('bgnusput.jpg') no-repeat center center fixed;
            background-size: 100% 100%;
            /* Mengatur ukuran latar belakang sesuai halaman */
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
            padding: 14px 10px;
            text-decoration: none;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .navbar-pendidikan a:hover {
            background-color: #265C70;
        }
        .container {
            background-color: #fff;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

    <div class="container">
        <h2>B. hasil karya</h2>
        <h3>1. Karya Tulis/Penulisan artikel online bidang pendidikan menggunakan media Blog</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Romawi</th>
                <th>Dibuktikan dengan dokumen Karya Tulis / Penulisan artikel online di blog sesuai kompetensi bidang ilmu yang diampu ( menginformasikan alamat blog yang memuat dokumen tsb ):</th>
                <th>Laporan kegiatan</th>
                <th>Skor Sistem</th>
                <th>Skor Fix</th>
            </tr>

            <?php
            $no = 1;
            $query_ia = mysqli_query($koneksi, "SELECT * FROM tabel_p_pendidikan2 WHERE tahun_penilaian = '$tahun_ini'");

            while ($row = mysqli_fetch_array($query_ia)) {
                $file_berkasiaa = $row['berkasib1'];
                $file_berkasiaaa = $row['berkasib11'];
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['ib1']; ?></td>
                    <td>
                        <?php if (!empty($file_berkasiaa)) { ?>
                            <a href="uploads/<?php echo $file_berkasiaa; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td>
                        <?php if (!empty($file_berkasiaaa)) { ?>
                            <a href="uploads/<?php echo $file_berkasiaaa; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td><?php echo $row['poinib1']; ?></td>
                    <td>
                        <input type="text" class="editable-ib1" data-id="<?php echo $row['id']; ?>" value="<?php echo $row['apoinib1']; ?>">
                    </td>
                </tr>
            <?php } ?>
        </table>
        <script>
            $(document).ready(function() {
                $(".editable-ib1").on("change", function() {
                    var skorFix = $(this).val();
                    var id = $(this).data("id");

                    $.ajax({
                        url: "update_skorib1.php",
                        type: "POST",
                        data: {
                            id: id,
                            skor_fix: skorFix
                        },
                        success: function(response) {
                            console.log("Skor Fix berhasil diperbarui");
                        },
                        error: function(xhr, status, error) {
                            console.error("Terjadi kesalahan: " + error);
                        }
                    });
                });
            });
        </script>



        <h3>2. Pendekatan STEAM/STEM</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Romawi</th>
                <th>Video pembelajaran dengan menggunakan pendekatan STEAM/STEM (menggunakan link berbentuk pdf)</th>
                <th>Berkas 2</th>
                <th>Berkas 3</th>
                <th>Skor Sistem</th>
                <th>Skor Fix</th>
            </tr>

            <?php
            $no = 1;
            $query_ia = mysqli_query($koneksi, "SELECT * FROM tabel_p_pendidikan2 WHERE tahun_penilaian = '$tahun_ini'");

            while ($row = mysqli_fetch_array($query_ia)) {
                $file_berkasiaa = $row['berkasib2'];
                $file_berkasiaaa = $row['berkasib22'];
                $file_berkasiaaaa = $row['berkasib222'];
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['ib2']; ?></td>
                    <td>
                        <?php if (!empty($file_berkasiaa)) { ?>
                            <a href="uploads/<?php echo $file_berkasiaa; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td>
                        <?php if (!empty($file_berkasiaaa)) { ?>
                            <a href="uploads/<?php echo $file_berkasiaaa; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td>
                        <?php if (!empty($file_berkasiaaaa)) { ?>
                            <a href="uploads/<?php echo $file_berkasiaaaa; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td><?php echo $row['poinib2']; ?></td>
                    <td>
                        <input type="text" class="editable-ib2" data-id="<?php echo $row['id']; ?>" value="<?php echo $row['apoinib2']; ?>">
                    </td>
                </tr>
            <?php } ?>
        </table>
        <script>
            $(document).ready(function() {
                $(".editable-ib2").on("change", function() {
                    var skorFix = $(this).val();
                    var id = $(this).data("id");

                    $.ajax({
                        url: "update_skorib2.php",
                        type: "POST",
                        data: {
                            id: id,
                            skor_fix: skorFix
                        },
                        success: function(response) {
                            console.log("Skor Fix berhasil diperbarui");
                        },
                        error: function(xhr, status, error) {
                            console.error("Terjadi kesalahan: " + error);
                        }
                    });
                });
            });
        </script>




        <h3>3. Penggunaan alat peraga</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Romawi</th>
                <th>Foto/video alat peraga saat digunakan dalam proses pembelajaran yang dibuat oleh guru</th>
                <th>Berkas 2</th>
                <th>Berkas 3</th>
                <th>Skor Sistem</th>
                <th>Skor Fix</th>
            </tr>

            <?php
            $no = 1;
            $query_ia = mysqli_query($koneksi, "SELECT * FROM tabel_p_pendidikan2 WHERE tahun_penilaian = '$tahun_ini'");

            while ($row = mysqli_fetch_array($query_ia)) {
                $file_berkasiaa = $row['berkasib3'];
                $file_berkasiaaa = $row['berkasib33'];
                $file_berkasiaaaa = $row['berkasib333'];
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['ib3']; ?></td>
                    <td>
                        <?php if (!empty($file_berkasiaa)) { ?>
                            <a href="uploads/<?php echo $file_berkasiaa; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td>
                        <?php if (!empty($file_berkasiaaa)) { ?>
                            <a href="uploads/<?php echo $file_berkasiaaa; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td>
                        <?php if (!empty($file_berkasiaaaa)) { ?>
                            <a href="uploads/<?php echo $file_berkasiaaaa; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td><?php echo $row['poinib3']; ?></td>
                    <td>
                        <input type="text" class="editable-ib3" data-id="<?php echo $row['id']; ?>" value="<?php echo $row['apoinib3']; ?>">
                    </td>
                </tr>
            <?php } ?>
        </table>
        <script>
            $(document).ready(function() {
                $(".editable-ib3").on("change", function() {
                    var skorFix = $(this).val();
                    var id = $(this).data("id");

                    $.ajax({
                        url: "update_skorib3.php",
                        type: "POST",
                        data: {
                            id: id,
                            skor_fix: skorFix
                        },
                        success: function(response) {
                            console.log("Skor Fix berhasil diperbarui");
                        },
                        error: function(xhr, status, error) {
                            console.error("Terjadi kesalahan: " + error);
                        }
                    });
                });
            });
        </script>
    </div>



    





</body>

</html>