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
        <h2>1. Mengikuti Workshop</h2>
        <h3>• Mengikuti workshop/pelatihan workshop Local</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Romawi</th>
                <th>Sertifikat workshop/pelatihan</th>
                <th>Laporan kegiatan</th>
                <th>Skor Sistem</th>
                <th>Skor Fix</th>
            </tr>

            <?php
            $no = 1;
            $query_ia = mysqli_query($koneksi, "SELECT * FROM tabel_p_pendidikan2 WHERE tahun_penilaian = '$tahun_ini'");

            while ($row = mysqli_fetch_array($query_ia)) {
                $file_berkasiaa = $row['berkasiaa'];
                $file_berkasiaaa = $row['berkasiaaa'];
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['iaa']; ?></td>
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
                    <td><?php echo $row['poiniaa']; ?></td>
                    <td>
                        <input type="text" class="editable-iaa" data-id="<?php echo $row['id']; ?>" value="<?php echo $row['apoiniaa']; ?>">
                    </td>
                </tr>
            <?php } ?>
        </table>
        <script>
            $(document).ready(function() {
                $(".editable-iaa").on("change", function() {
                    var skorFix = $(this).val();
                    var id = $(this).data("id");

                    $.ajax({
                        url: "update_skor.php",
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





        <h3>• Mengikuti workshop/pelatihan workshop/pelatihan internal/ Forum KKG/MGMP</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Romawi</th>
                <th>Sertifikat workshop/pelatihan/Surat Tugas</th>
                <th>Laporan kegiatan</th>
                <th>Skor Sistem</th>
                <th>Skor Fix</th>
            </tr>

            <?php
            $no = 1;
            $query_ia1 = mysqli_query($koneksi, "SELECT * FROM tabel_p_pendidikan2 WHERE tahun_penilaian = '$tahun_ini'");

            while ($row = mysqli_fetch_array($query_ia1)) {
                $file_berkasia1 = $row['berkasia1'];
                $file_berkasia11 = $row['berkasia11'];

            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['ia1']; ?></td>
                    <td>
                        <?php if (!empty($file_berkasia1)) { ?>
                            <a href="uploads/<?php echo $file_berkasia1; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td>
                        <?php if (!empty($file_berkasia11)) { ?>
                            <a href="uploads/<?php echo $file_berkasia11; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td><?php echo $row['poinia1']; ?></td>
                    <td>
                        <input type="text" class="editable-ia1" data-id="<?php echo $row['id']; ?>" value="<?php echo $row['apoinia1']; ?>">
                    </td>
                </tr>
            <?php } ?>
        </table>
        <script>
            $(document).ready(function() {
                $(".editable-ia1").on("change", function() {
                    var skorFix = $(this).val();
                    var id = $(this).data("id");

                    $.ajax({
                        url: "update_skoria1.php",
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





<h3>•  Mengikuti workshop/pelatihan Provinsi / Nasional</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Romawi</th>
                <th>Sertifikat workshop/pelatihan</th>
                <th>Laporan kegiatan</th>
                <th>Skor Sistem</th>
                <th>Skor Fix</th>
            </tr>

            <?php
            $no = 1;
            $query_ia1 = mysqli_query($koneksi, "SELECT * FROM tabel_p_pendidikan2 WHERE tahun_penilaian = '$tahun_ini'");

            while ($row = mysqli_fetch_array($query_ia1)) {
                $file_berkasia1 = $row['berkasiab1'];
                $file_berkasia11 = $row['berkasiab11'];

            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['iab1']; ?></td>
                    <td>
                        <?php if (!empty($file_berkasia1)) { ?>
                            <a href="uploads/<?php echo $file_berkasia1; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td>
                        <?php if (!empty($file_berkasia11)) { ?>
                            <a href="uploads/<?php echo $file_berkasia11; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td><?php echo $row['poiniab1']; ?></td>
                    <td>
                        <input type="text" class="editable-iab1" data-id="<?php echo $row['id']; ?>" value="<?php echo $row['apoiniab1']; ?>">
                    </td>
                </tr>
            <?php } ?>
        </table>
        <script>
            $(document).ready(function() {
                $(".editable-iab1").on("change", function() {
                    var skorFix = $(this).val();
                    var id = $(this).data("id");

                    $.ajax({
                        url: "update_skoriab1.php",
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





<h3>•  Mengikuti workshop/pelatihan Internasional ( laporan dalam Bhs Inggris )</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Romawi</th>
                <th>Sertifikat workshop/pelatihan</th>
                <th>Laporan kegiatan</th>
                <th>Skor Sistem</th>
                <th>Skor Fix</th>
            </tr>

            <?php
            $no = 1;
            $query_ia1 = mysqli_query($koneksi, "SELECT * FROM tabel_p_pendidikan2 WHERE tahun_penilaian = '$tahun_ini'");

            while ($row = mysqli_fetch_array($query_ia1)) {
                $file_berkasia1 = $row['berkasiac1'];
                $file_berkasia11 = $row['berkasiac11'];

            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['iac1']; ?></td>
                    <td>
                        <?php if (!empty($file_berkasia1)) { ?>
                            <a href="uploads/<?php echo $file_berkasia1; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td>
                        <?php if (!empty($file_berkasia11)) { ?>
                            <a href="uploads/<?php echo $file_berkasia11; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td><?php echo $row['poiniac1']; ?></td>
                    <td>
                        <input type="text" class="editable-iac1" data-id="<?php echo $row['id']; ?>" value="<?php echo $row['apoiniac1']; ?>">
                    </td>
                </tr>
            <?php } ?>
        </table>
        <script>
            $(document).ready(function() {
                $(".editable-iac1").on("change", function() {
                    var skorFix = $(this).val();
                    var id = $(this).data("id");

                    $.ajax({
                        url: "update_skoriac1.php",
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





<h3>•  2. Implementasi pelatihan/ workshop</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Romawi</th>
                <th>Flyer atau undangan pelatihan / workshop</th>
                <th>Video hasil karya guru (bukan siswa) atau kegiatan yang di-creat sesuai pelatihan / workshop yang diikuti dan dimanfaatkan dalam proses pembelajaran ada interaksi antara guru dan siswa:</th>
                <th>Skor Sistem</th>
                <th>Skor Fix</th>
            </tr>

            <?php
            $no = 1;
            $query_ia1 = mysqli_query($koneksi, "SELECT * FROM tabel_p_pendidikan2 WHERE tahun_penilaian = '$tahun_ini'");

            while ($row = mysqli_fetch_array($query_ia1)) {
                $file_berkasia1 = $row['berkasia2'];
                $file_berkasia11 = $row['berkasia22'];

            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['ia2']; ?></td>
                    <td>
                        <?php if (!empty($file_berkasia1)) { ?>
                            <a href="uploads/<?php echo $file_berkasia1; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td>
                        <?php if (!empty($file_berkasia11)) { ?>
                            <a href="uploads/<?php echo $file_berkasia11; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td><?php echo $row['poinia2']; ?></td>
                    <td>
                        <input type="text" class="editable-ia2" data-id="<?php echo $row['id']; ?>" value="<?php echo $row['apoinia2']; ?>">
                    </td>
                </tr>
            <?php } ?>
        </table>
        <script>
            $(document).ready(function() {
                $(".editable-ia2").on("change", function() {
                    var skorFix = $(this).val();
                    var id = $(this).data("id");

                    $.ajax({
                        url: "update_skoria2.php",
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