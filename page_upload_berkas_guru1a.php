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

            <form action="proses_upload.php" method="post" enctype="multipart/form-data">
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


                </div>
                <h2>I. Pengembangan diri sendiri</h2>
                <h3>A. Peningkatan Kompetensi</h3>
                <div>
                    <form method="post" action="proses_uploadia1.php" enctype="multipart/form-data">
                        <!-- Form elements -->
                        <label>1. Mengikuti kegiatan Seminar/Workshop/Pelatihan/KKG/MGMP /PMM/Komunitas Belajar</label>
                        <label for="iaa">Local</label>
                        <select name="iaa" id="iaa">
                            <option value=""></option>
                            <option value="Tidak pernah">Tidak pernah</option>
                            <option value="Mengikuti kegiatan Seminar/Workshop/Pelatihan/KKG/MGMP /PMM/Komunitas Belajar Local">Mengikuti workshop/pelatihan workshop Local</option>
                        </select>

                        <div class="form-group" id="surat-group">
                            <label for="berkasia" style="text-decoration: underline;">Surat Tugas:</label>
                            <input type="file" id="berkasia" name="berkasia">
                        </div>

                        <div class="form-group" id="sertifikat-group">
                            <label for="berkasiaa" style="text-decoration: underline;">Sertifikat workshop/pelatihan</label>
                            <input type="file" id="berkasiaa" name="berkasiaa">
                        </div>

                        <div class="form-group" id="laporan-group">
                            <label for="berkasiaaa" style="text-decoration: underline;">Laporan kegiatan:</label>
                            <input type="file" id="berkasiaaa" name="berkasiaaa">
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var form = document.querySelector('form');
                                var iaa = document.getElementById('iaa');
                                var suratGroup = document.getElementById('surat-group');
                                var sertifikatGroup = document.getElementById('sertifikat-group');
                                var laporanGroup = document.getElementById('laporan-group');
                                var berkasia = document.getElementById('berkasia');
                                var berkasiaa = document.getElementById('berkasiaa');
                                var berkasiaaa = document.getElementById('berkasiaaa');

                                function toggleFileInputs() {
                                    if (iaa.value === 'Tidak pernah' || iaa.value === '') {
                                        suratGroup.style.display = 'none';
                                        sertifikatGroup.style.display = 'none';
                                        laporanGroup.style.display = 'none';
                                        
                                    } else {
                                        suratGroup.style.display = 'block';
                                        sertifikatGroup.style.display = 'block';
                                        laporanGroup.style.display = 'block';
                                       
                                    }
                                }

                                // Jalankan fungsi saat halaman dimuat
                                toggleFileInputs();

                                // Tambahkan event listener untuk perubahan select
                                iaa.addEventListener('change', toggleFileInputs);

                                // Validasi form sebelum submit
                               
                            });
                        </script>




                        <label for="ia1">PMM/Komunitas Belajar</label>
                        <select name="ia1" id="ia1">
                            <option value="">-- Pilih --</option>
                            <option value="Tidak pernah">Tidak pernah</option>
                            <option value="Mengikuti PMM/Komunitas Belajar">Workshop/pelatihan Internal/Forum KKG/MGMP</option>
                        </select>

                        <div class="form-group" id="berkas-group" style="display: none;">
                            <label for="berkasia1" style="text-decoration: underline;">Sertifikat workshop/pelatihan/Surat Tugas</label>
                            <input type="file" id="berkasia1" name="berkasia1">

                            <label for="berkasia11" style="text-decoration: underline;">Laporan kegiatan:</label>
                            <input type="file" id="berkasia11" name="berkasia11">

                            <label for="berkasia111" style="text-decoration: underline;">Surat Tugas:</label>
                            <input type="file" id="berkasia111" name="berkasia111">
                        </div>



                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var ia1 = document.getElementById('ia1');
                                var berkasGroup = document.getElementById('berkas-group');
                                var berkasia1 = document.getElementById('berkasia1');
                                var berkasia11 = document.getElementById('berkasia11');
                                var berkasia111 = document.getElementById('berkasia111');
                                var form = document.getElementById('form');

                                function toggleFileInputs() {
                                    if (ia1.value === "Mengikuti PMM/Komunitas Belajar") {
                                        berkasGroup.style.display = 'block';
                                        
                                    } else {
                                        berkasGroup.style.display = 'none';
                                        
                                    }
                                }

                                // Jalankan saat halaman dimuat
                                toggleFileInputs();

                                // Jalankan saat dropdown berubah
                                ia1.addEventListener('change', toggleFileInputs);

                                // Validasi sebelum submit
                               
                            });
                        </script>



                        <label for="iab1"> • Nasional</label>
                        <select name="iab1" id="iab1">
                            <option value=""></option>
                            <option>Tidak pernah</option>
                            <option>Mengikuti kegiatan Seminar/Workshop/Pelatihan/KKG/MGMP /PMM/Komunitas Belajar Nasional</option>
                        </select>
                        <div class="form-group">
                            <label for="berkasiab1" style="text-decoration: underline;">Sertifikat workshop/pelatihan</label>
                            <input type="file" id="berkasiab1" name="berkasiab1">
                        </div>

                        <div class="form-group">
                            <label for="berkasiab11" style="text-decoration: underline;">Laporan kegiatan:</label>
                            <input type="file" id="berkasiab11" name="berkasiab11">
                        </div>

                        <div class="form-group">
                            <label for="berkasiab111" style="text-decoration: underline;">Surat Tugas</label>
                            <input type="file" id="berkasiab111" name="berkasiab111">
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var form = document.querySelector('form');
                                var iab1 = document.getElementById('iab1');
                                var berkasiab1 = document.getElementById('berkasiab1');
                                var berkasiab11 = document.getElementById('berkasiab11');
                                var berkasiab111 = document.getElementById('berkasiab111');

                                // Function to show or hide file inputs based on selected option
                                function toggleFileInputs() {
                                    if (iab1.value === 'Tidak pernah' || iab1.value === '') {
                                        berkasiab1.style.display = 'none';
                                        berkasiab11.style.display = 'none';
                                        berkasiab111.style.display = 'none';
                                    } else {
                                        berkasiab1.style.display = 'block';
                                        berkasiab11.style.display = 'block';
                                        berkasiab111.style.display = 'block';
                                    }
                                }

                                // Toggle file inputs on page load
                                toggleFileInputs();

                                // Toggle file inputs when option is changed
                                iab1.addEventListener('change', function() {
                                    toggleFileInputs();
                                });

                                // Form submission validation
                                
                            });
                        </script>

                        <label for="iac1"> • Internasional ( laporan dalam Bhs Inggris )</label>
                        <select name="iac1" id="iac1">
                            <option value=""></option>
                            <option>Tidak pernah</option>
                            <option>Internasional ( laporan dalam Bhs Inggris )</option>
                </div>
                </select>
                <div class="form-group">
                    <label for="berkasiac1" style="text-decoration: underline;">Sertifikat workshop/pelatihan</label>
                    <input type="file" id="berkasiac1" name="berkasiac1">
                </div>

                <div class="form-group">
                    <label for="berkasiac11" style="text-decoration: underline;">Laporan kegiatan:</label>
                    <input type="file" id="berkasiac11" name="berkasiac11">
                </div>

                <div class="form-group">
                    <label for="berkasiac111" style="text-decoration: underline;">Surat Tugas:</label>
                    <input type="file" id="berkasiac111" name="berkasiac111">
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var form = document.querySelector('form');
                        var iac1 = document.getElementById('iac1');
                        var berkasiac1 = document.getElementById('berkasiac1');
                        var berkasiac11 = document.getElementById('berkasiac11');
                        var berkasiac111 = document.getElementById('berkasiac111');

                        // Function to show or hide file inputs based on selected option
                        function toggleFileInputs() {
                            if (iac1.value === 'Tidak pernah' || iac1.value === '') {
                                berkasiac1.style.display = 'none';
                                berkasiac11.style.display = 'none';
                                berkasiac111.style.display = 'none';
                            } else {
                                berkasiac1.style.display = 'block';
                                berkasiac11.style.display = 'block';
                                berkasiac111.style.display = 'block';
                            }
                        }

                        // Toggle file inputs on page load
                        toggleFileInputs();

                        // Toggle file inputs when option is changed
                        iac1.addEventListener('change', function() {
                            toggleFileInputs();
                        });

                        // Form submission validation
                        
                    });
                </script>

                <div>
                    <label for="ia2">2. Implementasi pelatihan/ workshop</label>
                    <select name="ia2" id="ia2">
                        <option></option>
                        <option>Tidak pernah</option>
                        <option>Kegiatan yang kreatif/hasil karya</option>
                        
                    </select>
                    <div class="form-group">
                        <label for="berkasia2" style="text-decoration: underline;">Flyer atau undangan pelatihan / workshop :</label>
                        <input type="file" id="berkasia2" name="berkasia2">
                    </div>

                    <div class="form-group">
                        <label for="berkasia22" style="text-decoration: underline;">Video hasil karya guru (bukan siswa) atau kegiatan yang di-creat sesuai pelatihan / workshop yang diikuti dan dimanfaatkan dalam proses pembelajaran ada interaksi antara guru dan siswa:</label>
                        <input type="file" id="berkasia22" name="berkasia22">
                    </div>

                    <!-- Add file input for berkasiaaa1 -->
                    <div class="form-group">
                        <label for="berkasia222" style="display: none;">Berkas 3:</label>
                        <input style="display: none;" type="file" id="berkasia222" name="berkasia222">
                    </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var ia2 = document.getElementById('ia2');
                        var berkasia2 = document.getElementById('berkasia2');
                        var berkasia22 = document.getElementById('berkasia22');

                        // Function to show or hide file inputs based on selected option
                        function toggleFileInputs() {
                            if (ia2.value === 'Tidak pernah') {
                                berkasia2.style.display = 'none';
                                berkasia22.style.display = 'none';
                            } else {
                                berkasia2.style.display = 'block';
                                berkasia22.style.display = 'block';
                            }
                        }

                        // Toggle file inputs on page load
                        toggleFileInputs();

                        // Toggle file inputs when option is changed
                        ia2.addEventListener('change', function() {
                            toggleFileInputs();
                        });

                        // Form submission validation
                       
                       
                    });
                </script>
                <input type="submit" value="submit">
    </div>
    </div>


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