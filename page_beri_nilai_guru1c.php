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
            background-color: #3498db;
            /* Ubah warna background ke warna sebelumnya */
            border: 1px solid #2978a0;
            padding: 10px 0;
            text-align: center;
            /* Posisi teks navbar di tengah */
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
        <h2>C. Support Pilar</h2>
        <h3>• 1. Penguasaan Bahasa Asing</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Romawi</th>
                <th>Dibuktikan dengan video pembelajaran yang mendukung (link video dalam bentuk PDF)</th>
                <th>Laporan kegiatan</th>
                <th>Skor Sistem</th>
                <th>Skor Fix</th>
            </tr>

            <?php
            $no = 1;
            $query_ia = mysqli_query($koneksi, "SELECT * FROM tabel_p_pendidikan2 WHERE tahun_penilaian = '$tahun_ini'");

            while ($row = mysqli_fetch_array($query_ia)) {
                $file_berkasiaa = $row['berkasic1'];
                $file_berkasiaaa = $row['berkasic11'];
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['ic1']; ?></td>
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
                    <td><?php echo $row['poinic1']; ?></td>
                    <td>
                        <input type="text" class="editable-ic1" data-id="<?php echo $row['id']; ?>" value="<?php echo $row['apoinic1']; ?>">
                    </td>
                </tr>
            <?php } ?>
        </table>
        <script>
            $(document).ready(function() {
                $(".editable-ic1").on("change", function() {
                    var skorFix = $(this).val();
                    var id = $(this).data("id");

                    $.ajax({
                        url: "update_skoric1.php",
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




        <h3>• 2.Kewirausahaan</h3>
        <h3>• TK/SD I-III</h3>
        <h3>• Hasil karya yang dipamerkan harus memiliki nilai jual / menarik untuk dipamerkan.</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Romawi</th>
                <th>Dibuktikan dengan video pembelajaran yang mendukung (link video dalam bentuk PDF)</th>

                <th>Skor Sistem</th>
                <th>Skor Fix</th>
            </tr>

            <?php
            $no = 1;
            $query_ia = mysqli_query($koneksi, "SELECT * FROM tabel_p_pendidikan2 WHERE tahun_penilaian = '$tahun_ini'");

            while ($row = mysqli_fetch_array($query_ia)) {
                if (!empty($row['kecilberkasic2'])) {

                    $file_berkasiaa = $row['kecilberkasic2'];

            ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['kecilic2']; ?></td>
                        <td>
                            <?php if (!empty($file_berkasiaa)) { ?>
                                <a href="uploads/<?php echo $file_berkasiaa; ?>" target="_blank">Download</a>
                            <?php } else {
                                echo "Tidak ada file";
                            } ?>
                        </td>

                        <td><?php echo $row['poin_kecilic2']; ?></td>
                        <td>
                            <input type="text" class="editable-kecilic2" data-id="<?php echo $row['id']; ?>" value="<?php echo $row['apoin_kecilic2']; ?>">
                        </td>
                    </tr>
                <?php
                } else {
                }
                ?>
            <?php } ?>
        </table>
        <script>
            $(document).ready(function() {
                $(".editable-kecilic2").on("change", function() {
                    var skorFix = $(this).val();
                    var id = $(this).data("id");

                    $.ajax({
                        url: "update_skorkecilic2.php",
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




        <h3>• Laporan dibuat oleh guru TK dan SD (kls I-III) meliputi pendahuluan, dokumentasi kegiatan, daftar pengunjung, serta kesan dan pesan pengunjung.</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Romawi</th>
                <th>Laporan kegiatan beserta dokumentasi</th>

                <th>Skor Sistem</th>
                <th>Skor Fix</th>
            </tr>

            <?php
            $no = 1;
            $query_ia = mysqli_query($koneksi, "SELECT * FROM tabel_p_pendidikan2 WHERE tahun_penilaian = '$tahun_ini'");

            while ($row = mysqli_fetch_array($query_ia)) {
                if (!empty($row['kecilberkasicb2'])) {

                    $file_berkasiaa = $row['kecilberkasicb2'];

            ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['kecilicb2']; ?></td>
                        <td>
                            <?php if (!empty($file_berkasiaa)) { ?>
                                <a href="uploads/<?php echo $file_berkasiaa; ?>" target="_blank">Download</a>
                            <?php } else {
                                echo "Tidak ada file";
                            } ?>
                        </td>

                        <td><?php echo $row['poin_kecilicb2']; ?></td>
                        <td>
                            <input type="text" class="editable-kecilicb2" data-id="<?php echo $row['id']; ?>" value="<?php echo $row['apoin_kecilicb2']; ?>">
                        </td>
                    </tr>
                <?php
                } else {
                }
                ?>
            <?php } ?>
        </table>
        <script>
            $(document).ready(function() {
                $(".editable-kecilicb2").on("change", function() {
                    var skorFix = $(this).val();
                    var id = $(this).data("id");

                    $.ajax({
                        url: "update_skorkecilicb2.php",
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







        <h3>• SD IV - SMK </h3>
        <h3>• Perencanaan ( proposal )</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Romawi</th>
                <th>Perencanaan ( proposal )</th>

                <th>Skor Sistem</th>
                <th>Skor Fix</th>
            </tr>

            <?php
            $no = 1;
            $query_ia = mysqli_query($koneksi, "SELECT * FROM tabel_p_pendidikan2 WHERE tahun_penilaian = '$tahun_ini'");

            while ($row = mysqli_fetch_array($query_ia)) {
                if (!empty($row['berkasic2'])) {

                    $file_berkasiaa = $row['berkasic2'];

            ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['ic2']; ?></td>
                        <td>
                            <?php if (!empty($file_berkasiaa)) { ?>
                                <a href="uploads/<?php echo $file_berkasiaa; ?>" target="_blank">Download</a>
                            <?php } else {
                                echo "Tidak ada file";
                            } ?>
                        </td>

                        <td><?php echo $row['poinic2']; ?></td>
                        <td>
                            <input type="text" class="editable-ic2" data-id="<?php echo $row['id']; ?>" value="<?php echo $row['apoinic2']; ?>">
                        </td>
                    </tr>
                <?php
                } else {
                }
                ?>
            <?php } ?>
        </table>
        <script>
            $(document).ready(function() {
                $(".editable-ic2").on("change", function() {
                    var skorFix = $(this).val();
                    var id = $(this).data("id");

                    $.ajax({
                        url: "update_skoric2.php",
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



        <h3>• Video presentasi siswa pembuatan produk / kegiatan perayaan</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Romawi</th>
                <th>Video presentasi siswa pembuatan produk / kegiatan perayaan</th>

                <th>Skor Sistem</th>
                <th>Skor Fix</th>
            </tr>

            <?php
            $no = 1;
            $query_ia = mysqli_query($koneksi, "SELECT * FROM tabel_p_pendidikan2 WHERE tahun_penilaian = '$tahun_ini'");

            while ($row = mysqli_fetch_array($query_ia)) {
                if (!empty($row['berkasicb2'])) {

                    $file_berkasiaa = $row['berkasicb2'];

            ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['icb2']; ?></td>
                        <td>
                            <?php if (!empty($file_berkasiaa)) { ?>
                                <a href="uploads/<?php echo $file_berkasiaa; ?>" target="_blank">Download</a>
                            <?php } else {
                                echo "Tidak ada file";
                            } ?>
                        </td>

                        <td><?php echo $row['poinicc2']; ?></td>
                        <td>
                            <input type="text" class="editable-icb2" data-id="<?php echo $row['id']; ?>" value="<?php echo $row['apoinicb2']; ?>">
                        </td>
                    </tr>
                <?php
                } else {
                }
                ?>
            <?php } ?>
        </table>
        <script>
            $(document).ready(function() {
                $(".editable-icb2").on("change", function() {
                    var skorFix = $(this).val();
                    var id = $(this).data("id");

                    $.ajax({
                        url: "update_skoricb2.php",
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





        <h3>•Selling produk ( online / offline ) / pameran / perayaan</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Romawi</th>
                <th>Selling produk ( online / offline ) / pameran / perayaan</th>
                <th>Skor Sistem</th>
                <th>Skor Fix</th>
            </tr>

            <?php
            $no = 1;
            $query_ia = mysqli_query($koneksi, "SELECT * FROM tabel_p_pendidikan2 WHERE tahun_penilaian = '$tahun_ini'");

            while ($row = mysqli_fetch_array($query_ia)) {
                if (!empty($row['berkasicc2'])) {

                    $file_berkasiaa = $row['berkasicc2'];

            ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['icc2']; ?></td>
                        <td>
                            <?php if (!empty($file_berkasiaa)) { ?>
                                <a href="uploads/<?php echo $file_berkasiaa; ?>" target="_blank">Download</a>
                            <?php } else {
                                echo "Tidak ada file";
                            } ?>
                        </td>

                        <td><?php echo $row['poinicc2']; ?></td>
                        <td>
                            <input type="text" class="editable-icc2" data-id="<?php echo $row['id']; ?>" value="<?php echo $row['apoinicc2']; ?>">
                        </td>
                    </tr>
                <?php
                } else {
                }
                ?>
            <?php } ?>
        </table>
        <script>
            $(document).ready(function() {
                $(".editable-icc2").on("change", function() {
                    var skorFix = $(this).val();
                    var id = $(this).data("id");

                    $.ajax({
                        url: "update_skoricc2.php",
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








        <h3>• Pelaporan kegiatan</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Romawi</th>
                <th>Selling produk ( online / offline ) / pameran / perayaan</th>
                <th>Skor Sistem</th>
                <th>Skor Fix</th>
            </tr>

            <?php
            $no = 1;
            $query_ia = mysqli_query($koneksi, "SELECT * FROM tabel_p_pendidikan2 WHERE tahun_penilaian = '$tahun_ini'");

            while ($row = mysqli_fetch_array($query_ia)) {
                if (!empty($row['berkasicd2'])) {

                    $file_berkasiaa = $row['berkasicd2'];

            ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['icd2']; ?></td>
                        <td>
                            <?php if (!empty($file_berkasiaa)) { ?>
                                <a href="uploads/<?php echo $file_berkasiaa; ?>" target="_blank">Download</a>
                            <?php } else {
                                echo "Tidak ada file";
                            } ?>
                        </td>

                        <td><?php echo $row['poinicd2']; ?></td>
                        <td>
                            <input type="text" class="editable-icd2" data-id="<?php echo $row['id']; ?>" value="<?php echo $row['apoinicd2']; ?>">
                        </td>
                    </tr>
                <?php
                } else {
                }
                ?>
            <?php } ?>
        </table>
        <script>
            $(document).ready(function() {
                $(".editable-icd2").on("change", function() {
                    var skorFix = $(this).val();
                    var id = $(this).data("id");

                    $.ajax({
                        url: "update_skoricd2.php",
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