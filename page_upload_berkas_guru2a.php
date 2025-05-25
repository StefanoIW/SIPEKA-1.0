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
            <li><a href="page_upload_berkas_guru.php">Berkas Portofolio</a></li>
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

            <form action="proses_upload_2a.php" method="post" enctype="multipart/form-data">
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

                    <h2> II. Pengembangan Siswa</h2>
                    <h3>A. Kegiatan Pembimbingan Lomba Internal</h3>
                    <div>
                        <!-- <label for="iia1">1. Kegiatan lomba internal yang diupload dalam IG pribadi guru</label>
                        <select name="iia1" id="iia1">
                            <option></option>
                            <option>Tidak pernah</option>
                            <option>Upload kegiatan lomba internal di IG pribadi guru</option>
                        </select> -->
                        

                        <!-- <div class="form-group" style="display: none;">
                            <label for="berkasiia11">Berkas 2:</label>
                            <input type="file" id="berkasiia11" name="berkasiia11">
                        </div> -->

                        <!-- Add file input for berkasiaaa1 -->
                        <!-- <div class="form-group" style="display: none;">
                            <label for="berkasiia111">Berkas 3:</label>
                            <input type="file" id="berkasiia111" name="berkasiia111">
                        </div> -->
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var iia1 = document.getElementById('iia1');
                                var berkasiia1 = document.getElementById('berkasiia1');
                                var berkasiia11 = document.getElementById('berkasiia11');
                                var berkasiia111 = document.getElementById('berkasiia111');

                                // Function to show or hide file inputs based on selected option
                                function toggleFileInputs() {
                                    if (iia1.value === 'Tidak pernah') {
                                        berkasiia1.style.display = 'none';
                                        berkasiia11.style.display = 'none';
                                        berkasiia111.style.display = 'none';
                                    } else {
                                        berkasiia1.style.display = 'block';
                                        berkasiia11.style.display = 'block';
                                        berkasiia111.style.display = 'block';
                                    }
                                }

                                // Toggle file inputs on page load
                                toggleFileInputs();

                                // Toggle file inputs when option is changed
                                iia1.addEventListener('change', function() {
                                    toggleFileInputs();
                                });

                                // Form submission validation
                               
                            });
                        </script>

                        <div>
                            <label>1. Pembimbing Lomba Internal (sesuai kompetensi guru)</label>
                            <label for="iia2">• Pembimbing Peserta Lomba</label>

                            <select name="iia2" id="iia2">
                                <option></option>
                                <option>Tidak pernah</option>
                                <option>Pembimbing peserta lomba</option>
                            </select>
                            <div class="form-group">
                                <label for="berkasiia2" style="text-decoration: underline;">Dibuktikan dari postingan IG pribadi guru:</label>
                                <input type="file" id="berkasiia2" name="berkasiia2">
                            </div>

                            <div class="form-group">
                                <label for="berkasiia22" style="text-decoration: underline;">surat tugas dari pimpinan jenjang dan laporan kegiatan dan foto kegiatan

                                    :</label>
                                <input type="file" id="berkasiia22" name="berkasiia22">
                            </div>

                            <!-- Add file input for berkasiaaa1 -->
                            <div class="form-group">
                                <label for="berkasiia222" style="text-decoration: underline;">piagam/sertifikat kejuaraan 
                                :</label>
                                <input type="file" id="berkasiia222" name="berkasiia222">
                            </div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var iia2 = document.getElementById('iia2');
                                    var berkasiia2 = document.getElementById('berkasiia2');
                                    var berkasiia22 = document.getElementById('berkasiia22');
                                    var berkasiia222 = document.getElementById('berkasiia222');

                                    // Function to show or hide file inputs based on selected option
                                    function toggleFileInputs() {
                                        if (iia2.value === 'Tidak pernah') {
                                            berkasiia2.style.display = 'none';
                                            berkasiia22.style.display = 'none';
                                            berkasiia222.style.display = 'none';
                                        } else {
                                            berkasiia2.style.display = 'block';
                                            berkasiia22.style.display = 'block';
                                            berkasiia222.style.display = 'block';
                                        }
                                    }

                                    // Toggle file inputs on page load
                                    toggleFileInputs();

                                    // Toggle file inputs when option is changed
                                    iia2.addEventListener('change', function() {
                                        toggleFileInputs();
                                    });

                                    // Form submission validation
                                   
                                });
                            </script>
                            <div>
                                <label for="iiab2"> • Pembimbing Pemenang Lomba</label>

                                <select name="iiab2" id="iiab2">
                                    <option></option>
                                    <option>Tidak pernah</option>
                                    <option>Pembimbing pemenang lomba</option>
                                </select>
                                <div class="form-group">
                                    <label for="berkasiiab2" style="text-decoration: underline;">Surat tugas dari pimpinan jenjang:</label>
                                    <input type="file" id="berkasiiab2" name="berkasiiab2">
                                </div>

                                <!-- <div class="form-group">
                                    <label for="berkasiiab22" style="text-decoration: underline;">Flyer atau undangan:</label>
                                    <input type="file" id="berkasiiab22" name="berkasiiab22">
                                </div> -->

                                <!-- Add file input for berkasiaaa1 -->
                                <!-- <div class="form-group">
                                    <label for="berkasiiab222" style="text-decoration: underline;">Jurnal Pembimbingan:</label>
                                    <input type="file" id="berkasiiab222" name="berkasiiab222">
                                </div> -->

                                <div class="form-group">
                                    <label for="berkasiiab2222" style="text-decoration: underline;">Piagam/Sertifikat Kejuaraan(Jika Juara):</label>
                                    <input type="file" id="berkasiiab2222" name="berkasiiab2222">
                                </div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var iiab2 = document.getElementById('iiab2');
                                        var berkasiiab2 = document.getElementById('berkasiiab2');
                                        var berkasiiab22 = document.getElementById('berkasiiab22');
                                        var berkasiiab222 = document.getElementById('berkasiiab222');
                                        var berkasiiab2222 = document.getElementById('berkasiiab2222');

                                        // Function to show or hide file inputs based on selected option
                                        function toggleFileInputs() {
                                            if (iiab2.value === 'Tidak pernah') {
                                                berkasiiab2.style.display = 'none';
                                                berkasiiab22.style.display = 'none';
                                                berkasiiab222.style.display = 'none';
                                                berkasiiab2222.style.display = 'none';
                                            } else {
                                                berkasiiab2.style.display = 'block';
                                                berkasiiab22.style.display = 'block';
                                                berkasiiab222.style.display = 'block';
                                                berkasiiab2222.style.display = 'block';
                                            }
                                        }

                                        // Toggle file inputs on page load
                                        toggleFileInputs();

                                        // Toggle file inputs when option is changed
                                        iiab2.addEventListener('change', function() {
                                            toggleFileInputs();
                                        });

                                        // Form submission validation
                                       
                                    });
                                </script>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berkasiia1" style="text-decoration: underline;">Upload screenshoot dari postingan IG pribadi guru (nama akun sesuai nama guru):</label>
                            <input type="file" id="berkasiia1" name="berkasiia1">
                        </div>
                        <input type="submit" value="submit">
            </form>
    </div>
<?php
        } else {
            echo "<h2 class='text-center' style='color: red;'>*Report : Maaf, Anda tidak dapat mengakses halaman ini. Halaman ini hanya dapat diakses pada tanggal yang sudah ditentukan.</h2>";
        }
?>
</div>
<script src="berkasia1.js"></script>
</body>

</html>