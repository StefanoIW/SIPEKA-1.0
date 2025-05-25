<?php
session_start();
if (!isset($_SESSION['id'])) {
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
    <title>Halaman Guru</title>
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

        .navbar-guru {
            background-color: #3498db;
            /* Ubah warna background ke warna sebelumnya */
            border: 1px solid #2978a0;
            padding: 10px 0;
            text-align: center;
            /* Posisi teks navbar di tengah */
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

        .active {
            background-color: #2978a0;
            color: #fff;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        /* CSS untuk label */
        .form-group label {
            display: block;
            font-weight: bold;
            color: #333;
            /* Warna teks label */
            margin-bottom: 5px;
        }

        /* CSS untuk input teks */
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        /* CSS untuk elemen select */
        .form-group select {
            background: #f9f9f9;
            /* Warna latar belakang select */
        }

        /* CSS untuk elemen file input */
        .form-group input[type="file"] {
            width: 100%;
            margin-top: 5px;
            /* Tambahkan gaya khusus untuk elemen file input jika diperlukan */
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="file"] {
            width: 100%;
            margin-top: 5px;
        }

        h2 {
            margin-top: 20px;
        }

        input[type="submit"] {
            background-color: #0073e6;
            /* Warna biru */
            color: #fff;
            /* Teks putih */
            padding: 15px 30px;
            /* Ukuran besar */
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0052a5;
            /* Warna biru yang sedikit lebih gelap saat digulirkan */
        }

        h2,
        h3 {
            color: blue;
        }
    </style>
</head>

<body>
    <script src="page_proses_berkas_guru.js"></script>
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
    <?php
    $tampilPeg = mysqli_query($koneksi, "SELECT * FROM tabel_jabatan WHERE username='$_SESSION[username]'");
    $peg = mysqli_fetch_array($tampilPeg);
    ?>

    <div class="container">
        <?php
        $currentDate = date('d-m-Y');
        $Q = mysqli_query($koneksi, "SELECT* FROM tabel_p_pendidikan2");
        $R = mysqli_fetch_array($Q);
        // Tanggal yang diizinkan untuk mengakses halaman (9 Februari setiap tahun)
        $allowedDate = date('d-m') === '12-02';
        if ($allowedDate || $R['Aktivasi'] == '1') {
        ?>

            <form action="proses_upload_3c.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="id">ID Guru:</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $peg['id']; ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="nama">Nama Guru:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $peg['nama']; ?>" readonly>
                </div>
                <div class="form-group">
                    <?php
                    $tahun_ini = date("Y");

                    ?>
                    <label for="tahun_penilaian">Tahun penilaian:</label>
                    <input type="number" id="tahun_penilaian" name="tahun_penilaian" value="<?php echo $tahun_ini; ?>" readonly>


                    <h3>C. Partisipasi Pelatihan / Kegiatan eksternal</h3>
                    <div>
                        <label for="iiic1">1. Guru dapat berpartisipasi dalam kegiatan yang diselenggarakan oleh pihak eksternal / lintas jenjang:</label>

                        <select name="iiic1" id="iiic1">
                            <option></option>
                            <option>Tidak pernah</option>
                            <option>Moderator/Host/Juri/Guru pamong / penugasan khusus</option>
                            <option>Narasumber</option>
                        </select>

                        <div class="form-group">
                            <label for="berkasiiic1" style="text-decoration: underline;">Surat Tugas Moderator:</label>
                            <input type="file" id="berkasiiic1" name="berkasiiic1">
                        </div>

                        <div class="form-group">
                            <label for="berkasiiic11" style="text-decoration: underline;">Surat Tugas:</label>
                            <input type="file" id="berkasiiic11" name="berkasiiic11">
                        </div>

                        <!-- Add file input for berkasiaaa1 -->
                        <div class="form-group">
                            <label for="berkasiiic111" style="text-decoration: underline;">Daftar Hadir Peserta:</label>
                            <input type="file" id="berkasiiic111" name="berkasiiic111">
                        </div>
                        <div class="form-group">
                            <label for="berkasiiic1111" style="text-decoration: underline;">Dokumentasi Kegiatan:</label>
                            <input type="file" id="berkasiiic1111" name="berkasiiic1111">
                        </div>
                        <div class="form-group">
                            <label for="berkasiiic11111" style="text-decoration: underline;">Sertifikat:</label>
                            <input type="file" id="berkasiiic11111" name="berkasiiic11111">
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var iiic1 = document.getElementById('iiic1');
                                var berkasiiic1 = document.getElementById('berkasiiic1');
                                var berkasiiic11 = document.getElementById('berkasiiic11');
                                var berkasiiic111 = document.getElementById('berkasiiic111');
                                var berkasiiic1111 = document.getElementById('berkasiiic1111');
                                var berkasiiic11111 = document.getElementById('berkasiiic11111');

                                // Function to show or hide file inputs based on selected option
                                function toggleFileInputs() {
                                    if (iiic1.value === 'Moderator/Host/Juri/Guru pamong / penugasan khusus') {
                                        // Show only Surat Tugas Moderator
                                        berkasiiic1.style.display = 'block';
                                        berkasiiic11.style.display = 'none';
                                        berkasiiic111.style.display = 'none';
                                        berkasiiic1111.style.display = 'none';
                                        berkasiiic11111.style.display = 'none';
                                    } else if (iiic1.value === 'Narasumber') {
                                        // Show all except Surat Tugas Moderator
                                        berkasiiic1.style.display = 'none';
                                        berkasiiic11.style.display = 'block';
                                        berkasiiic111.style.display = 'block';
                                        berkasiiic1111.style.display = 'block';
                                        berkasiiic11111.style.display = 'block';
                                    } else {
                                        // If "Tidak pernah" is selected, hide all file inputs
                                        berkasiiic1.style.display = 'none';
                                        berkasiiic11.style.display = 'none';
                                        berkasiiic111.style.display = 'none';
                                        berkasiiic1111.style.display = 'none';
                                        berkasiiic11111.style.display = 'none';
                                    }
                                }

                                // Toggle file inputs on page load
                                toggleFileInputs();

                                // Toggle file inputs when option is changed
                                iiic1.addEventListener('change', function() {
                                    toggleFileInputs();
                                });

                                var jumlah = 0;
                                // Form submission validation
                                var form = document.querySelector('form');
                                form.addEventListener('submit', function(event) {
                                    if (berkasiiic1.files.length > 0) {
                                        jumlah++;
                                    }
                                    if (berkasiiic11.files.length > 0) {
                                        jumlah++;
                                    }
                                    if (berkasiiic111.files.length > 0) {
                                        jumlah++;
                                    }
                                    if (berkasiiic1111.files.length > 0) {
                                        jumlah++;
                                    }
                                    if (berkasiiic11111.files.length > 0) {
                                        jumlah++;
                                    }
                                   
                                });
                            });
                        </script>

                        <input type="submit" value="submit">
            </form>
    </div>
<?php
        } else {
            echo "<h2 class='text-center' style='color: red;'>*Report : Maaf, Anda tidak dapat mengakses halaman ini. Halaman ini hanya dapat diakses pada tanggal yang sudah ditentukan.</h2>";
        }
?>
</div>
</body>

</html>