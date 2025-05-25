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
    <h3>C. Partisipasi Pelatihan / Kegiatan eksternal</h3>
        <h3>• 1. Guru dapat berpartisipasi dalam kegiatan yang diselenggarakan oleh pihak eksternal / lintas jenjang: </h3>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Romawi</th>
                <th>Surat Tugas Moderator:</th>
                <th>Surat Tugas:</th>
                <th>Daftar Hadir Peserta:</th>
                <th>Dokumentasi Kegiatan:</th>
                <th>Sertifikat:</th>
                <th>Skor Sistem</th>
                <th>Skor Fix</th>
            </tr>

            <?php
            $no = 1;
            $query_ia = mysqli_query($koneksi, "SELECT * FROM tabel_p_pendidikan2 WHERE tahun_penilaian = '$tahun_ini'");

            while ($row = mysqli_fetch_array($query_ia)) {
                $file_berkasiaa = $row['berkasiiic1'];
                $file_berkasiaaa = $row['berkasiiic11'];
                $file_berkasiaaaa = $row['berkasiiic111'];
                $file_berkasiaaaaa = $row['berkasiiic1111'];
                $file_berkasiaaaaaa = $row['berkasiiic11111'];
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['iiic1']; ?></td>
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
                    <td>
                        <?php if (!empty($file_berkasiaaaaa)) { ?>
                            <a href="uploads/<?php echo $file_berkasiaaaaa; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td>
                        <?php if (!empty($file_berkasiaaaaaa)) { ?>
                            <a href="uploads/<?php echo $file_berkasiaaaaaa; ?>" target="_blank">Download</a>
                        <?php } else {
                            echo "Tidak ada file";
                        } ?>
                    </td>
                    <td><?php echo $row['poiniiic1']; ?></td>
                    <td>
                        <input type="text" class="editable-iiic1" data-id="<?php echo $row['id']; ?>" value="<?php echo $row['apoiniiic1']; ?>">
                    </td>
                </tr>
            <?php } ?>
        </table>
        <script>
            $(document).ready(function() {
                $(".editable-iiic1").on("change", function() {
                    var skorFix = $(this).val();
                    var id = $(this).data("id");

                    $.ajax({
                        url: "update_skoriiic1.php",
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