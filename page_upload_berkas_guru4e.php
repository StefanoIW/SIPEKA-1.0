<?php
session_start();
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

            <form action="proses_upload_4e.php" method="post" enctype="multipart/form-data">
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



                    <h3>E. Supporting Unggulan Sekolah </h3>
                    <div>
                        <label> 1. Guru dapat dilibatkan sebagai mitra dalam melayani transaksi yang tersedia, maupun sebagai pengguna aplikasi dengan berpartisipasi membeli produk yang ditawarkan.
                            Jika guru :</label>
                        <label for="ive1"> • Memiliki Aplikasi My Nusaputera</label>

                        <select name="ive1" id="ive1">
                            <option></option>
                            <option>Tidak pernah</option>
                            <option>Download aplikasi My Nusaputera </option>
                        </select>
                        <div class="form-group">
                            <label for="berkasive1" style="text-decoration: underline;">screenshoot aplikasi yg memuat nama guru:</label>
                            <input type="file" id="berkasive1" name="berkasive1">
                        </div>

                        <div class="form-group" style="display: none;">
                            <label for="berkasive11"> sertifikat Mitra :</label>
                            <input type="file" id="berkasive11" name="berkasive11">
                        </div>

                        <!-- Add file input for berkasiaaa1 -->
                        <div class="form-group" style="display: none;">
                            <label for="berkasive111">Berkas 3:</label>
                            <input type="file" id="berkasive111" name="berkasive111">
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var ive1 = document.getElementById('ive1');
                                var berkasive1 = document.getElementById('berkasive1');
                                var berkasive11 = document.getElementById('berkasive11');
                                var berkasive111 = document.getElementById('berkasive111');

                                // Function to show or hide file inputs based on selected option
                                function toggleFileInputs() {
                                    if (ive1.value === 'Tidak pernah') {
                                        berkasive1.style.display = 'none';
                                        berkasive11.style.display = 'none';
                                        berkasive111.style.display = 'none';
                                    } else {
                                        berkasive1.style.display = 'block';
                                        berkasive11.style.display = 'block';
                                        berkasive111.style.display = 'block';
                                    }
                                }

                                // Toggle file inputs on page load
                                toggleFileInputs();

                                // Toggle file inputs when option is changed
                                ive1.addEventListener('change', function() {
                                    toggleFileInputs();
                                });

                                // Form submission validation
                               
                            });
                        </script>
                        <label for="ivea1"> • Sebagai Mitra</label>

                        <select name="ivea1" id="ivea1">
                            <option></option>
                            <option>Tidak pernah</option>
                            <option>Sebagai mitra jenjang masing-masing </option>
                        </select>
                        <div class="form-group">
                            <label for="berkasivea1" style="text-decoration: underline;">sertifikat Mitra:</label>
                            <input type="file" id="berkasivea1" name="berkasivea1">
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var ivea1 = document.getElementById('ivea1');
                                var berkasivea1 = document.getElementById('berkasivea1');

                                // Function to show or hide file inputs based on selected option
                                function toggleFileInputs() {
                                    if (ivea1.value === 'Tidak pernah') {
                                        berkasivea1.style.display = 'none';
                                    } else {
                                        berkasivea1.style.display = 'block';
                                    }
                                }

                                // Toggle file inputs on page load
                                toggleFileInputs();

                                // Toggle file inputs when option is changed
                                ivea1.addEventListener('change', function() {
                                    toggleFileInputs();
                                });

                                // Form submission validation
                                var form = document.querySelector('form');
                               
                            });
                        </script>

                        <div>
                            <label for="ive2">2. Sebagai partisipan dalam pembelian produk di My Nusaputera / Mitra /Siega auto Box selama satu tahun (sesuai periode penilaian) : </label>
                            <select name="ive2" id="ive2">
                                <option></option>
                                <option>Tidak pernah</option>
                                <option>6 sampai 12 transaksi</option>
                                <option>13 sampai 24 transaksi</option>
                                <option>Diatas 24 transaksi</option>
                            </select>
                            <div class="form-group">
                                <label for="berkasive2" style="text-decoration: underline;">Dibuktikan dengan screenshoot rekap pembelian – dicross cek dengan data transaksi :</label>
                                <input type="file" id="berkasive2" name="berkasive2">
                            </div>

                            <div class="form-group" style="display: none;"
                                <label for="berkasive22">Berkas 2:</label>
                                <input type="file" id="berkasive22" name="berkasive22">
                            </div>

                            <!-- Add file input for berkasiaaa1 -->
                            <div class="form-group" style="display: none;">
                                <label for="berkasive222">Berkas 3:</label>
                                <input type="file" id="berkasive222" name="berkasive222">
                            </div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var ive2 = document.getElementById('ive2');
                                    var berkasive2 = document.getElementById('berkasive2');
                                    var berkasive22 = document.getElementById('berkasive22');
                                    var berkasive222 = document.getElementById('berkasive222');

                                    // Function to show or hide file inputs based on selected option
                                    function toggleFileInputs() {
                                        if (ive2.value === 'Tidak pernah') {
                                            berkasive2.style.display = 'none';
                                            berkasive22.style.display = 'none';
                                            berkasive222.style.display = 'none';
                                        } else {
                                            berkasive2.style.display = 'block';
                                            berkasive22.style.display = 'block';
                                            berkasive222.style.display = 'block';
                                        }
                                    }

                                    // Toggle file inputs on page load
                                    toggleFileInputs();

                                    // Toggle file inputs when option is changed
                                    ive2.addEventListener('change', function() {
                                        toggleFileInputs();
                                    });

                                    // Form submission validation
                                   
                                });
                            </script>
                        </div>
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
</body>

</html>