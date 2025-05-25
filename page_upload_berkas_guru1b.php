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

            <form action="proses_upload_1b.php" method="post" enctype="multipart/form-data">
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

                    <h3>B. hasil karya</h3>
                    <div>
                        <label for="ib1">1. Karya Tulis/Penulisan artikel online bidang pendidikan menggunakan media Blog</label>
                        <select name="ib1" id="ib1">]
                            <option></option>
                            <option>Tidak pernah</option>
                            <option>Penulisan artikel online/E-modul</option>
                            <option>best Practice</option>
                            <option>PTK</option>
                            <option>buku/E-book</option>
                        </select>
                        <div class="form-group">
                            <label for="berkasib1" style="text-decoration: underline;">Dibuktikan dengan dokumen Karya Tulis / Penulisan artikel online di blog sesuai kompetensi bidang ilmu yang diampu ( menginformasikan alamat blog yang memuat dokumen tsb ):</label>
                            <input type="file" id="berkasib1" name="berkasib1">
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var ib1 = document.getElementById('ib1');
                                var berkasib1 = document.getElementById('berkasib1');

                                // Function to show or hide file inputs based on selected option
                                function toggleFileInputs() {
                                    if (ib1.value === 'Tidak pernah') {
                                        berkasib1.style.display = 'none';
                                    } else {
                                        berkasib1.style.display = 'block';

                                    }
                                }

                                // Toggle file inputs on page load
                                toggleFileInputs();

                                // Toggle file inputs when option is changed
                                ib1.addEventListener('change', function() {
                                    toggleFileInputs();
                                });

                                // Form submission validation
                              
                            });
                        </script>

                        <div>

                            <div>
                                <label for="ib2">2. Pendekatan STEAM/STEM </label>
                                <select name="ib2" id="ib2">
                                    <option value=""></option>
                                    <option value="Tidak pernah">Tidak pernah</option>
                                    <option value="Guru melaksanakan pendekatan STEAM/STEM dalam bentuk video">Guru melaksanakan pendekatan STEAM/STEM dalam bentuk video</option>
                                </select>

                                <div class="form-group" id="video-group">
                                    <label for="berkasib2" style="text-decoration: underline;">Video pembelajaran dengan menggunakan pendekatan STEAM/STEM (menggunakan link berbentuk pdf):</label>
                                    <input type="file" id="berkasib2" name="berkasib2">
                                </div>

                                <div class="form-group" id="berkas2-group" style="display: none;">
                                    <label for="berkasib22">Berkas 2:</label>
                                    <input type="file" id="berkasib22" name="berkasib22">
                                </div>

                                <div class="form-group" id="berkas3-group" style="display: none;">
                                    <label for="berkasib222">Berkas 3:</label>
                                    <input type="file" id="berkasib222" name="berkasib222">
                                </div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var ib2 = document.getElementById('ib2');
                                        var videoGroup = document.getElementById('video-group');
                                        var berkas2Group = document.getElementById('berkas2-group');
                                        var berkas3Group = document.getElementById('berkas3-group');
                                        var berkasib2 = document.getElementById('berkasib2');
                                        var berkasib22 = document.getElementById('berkasib22');
                                        var berkasib222 = document.getElementById('berkasib222');
                                        var form = document.querySelector('form');

                                        // Function untuk menampilkan/sembunyikan input file
                                        function toggleFileInputs() {
                                            if (ib2.value === 'Tidak pernah' || ib2.value === '') {
                                                videoGroup.style.display = 'none';
                                               
                                                
                                                
                                            } else {
                                                videoGroup.style.display = 'block';
                                               
                                                
                                               
                                            }
                                        }

                                        // Jalankan fungsi saat halaman dimuat
                                        toggleFileInputs();

                                        // Tambahkan event listener untuk perubahan select
                                        ib2.addEventListener('change', toggleFileInputs);

                                        // Validasi form sebelum submit
                                       
                                    });
                                </script>


                                <div>
                                    <label for="ib3">3. Penggunaan alat peraga</label>
                                    <select name="ib3" id="ib3">
                                        <option></option>
                                        <option>Tidak pernah</option>
                                        <option>bukan buatan sendiri</option>
                                        <option>buatan sendiri yang sederhana</option>
                                        <option>kolaborasi dengan siswa</option>
                                    </select>

                                    <div class="form-group" id="group-berkasib3" style="display: none;">
                                        <label for="berkasib3" style="text-decoration: underline;">video alat peraga saat digunakan dalam proses pembelajaran yang dibuat oleh guru:</label>
                                        <input type="file" id="berkasib3" name="berkasib3">
                                    </div>

                                    <div class="form-group" id="group-berkasib33" style="display: none;">
                                        <label for="berkasib33">Berkas 2:</label>
                                        <input type="file" id="berkasib33" name="berkasib33">
                                    </div>

                                    <div class="form-group" id="group-berkasib333" style="display: none;">
                                        <label for="berkasib333">Berkas 3:</label>
                                        <input type="file" id="berkasib333" name="berkasib333">
                                    </div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            var ib3 = document.getElementById('ib3');
                                            var groupBerkasib3 = document.getElementById('group-berkasib3');
                                            var groupBerkasib33 = document.getElementById('group-berkasib33');
                                            var groupBerkasib333 = document.getElementById('group-berkasib333');
                                            var berkasib3 = document.getElementById('berkasib3');

                                            // Fungsi untuk menampilkan atau menyembunyikan input file
                                            function toggleFileInputs() {
                                                if (ib3.value === 'Tidak pernah' || ib3.value === '') {
                                                    groupBerkasib3.style.display = 'none';
                                                    
                                                } else {
                                                    groupBerkasib3.style.display = 'block';
                                                    
                                                }
                                            }

                                            // Panggil fungsi saat halaman dimuat
                                            toggleFileInputs();

                                            // Tambahkan event listener untuk perubahan nilai select
                                            ib3.addEventListener('change', toggleFileInputs);

                                            // Validasi saat submit form
                                           
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="submit">
            </form>
        <?php
        } else {
            echo "<h2 class='text-center' style='color: red;'>*Report : Maaf, Anda tidak dapat mengakses halaman ini. Halaman ini hanya dapat diakses pada tanggal yang sudah ditentukan.</h2>";
        }
        ?>
</body>

</html>