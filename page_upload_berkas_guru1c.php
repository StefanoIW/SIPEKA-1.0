<?php
session_start();
include "koneksi.php";
if (!isset($_SESSION['id'])) {
    header('location:index.php');
    exit;
}

$query_jenjang = mysqli_query($koneksi, "SELECT * from tabel_jabatan where id = '$_SESSION[id]'");
$row_jenjang = mysqli_fetch_array($query_jenjang);
$jenjang = $row_jenjang['jenjang'];
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

            <form action="proses_upload_1c.php" method="post" enctype="multipart/form-data">
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

                    <h3>C. Support Pilar</h3>
                    <div>
                        <label for="ic1">1. Penguasaan Bahasa Asing</label>
                        <select name="ic1" id="ic1">
                            <option value="">Pilih</option>
                            <option value="Tidak pernah">Tidak pernah</option>
                            <option value="membuka, menutup pembelajaran">Membuka, menutup pembelajaran</option>
                            <option value="membuka, menutup pembelajaran serta percakapan sederhana dalam proses pembelajaran">
                                Membuka, menutup pembelajaran serta percakapan sederhana dalam proses pembelajaran
                            </option>
                            <option value="membuka, menutup pembelajaran serta percakapan aktif dalam proses pembelajaran">
                                Membuka, menutup pembelajaran serta percakapan aktif dalam proses pembelajaran
                            </option>
                        </select>

                        <div class="form-group">
                            <label for="berkasic1" style="text-decoration: underline;">
                                Dibuktikan dengan video pembelajaran yang mendukung (link video dalam bentuk PDF)
                            </label>
                            <input type="file" id="berkasic1" name="berkasic1" accept=".pdf">
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var ic1 = document.getElementById('ic1');
                                var berkasic1 = document.getElementById('berkasic1');

                                // Function to show or hide file input based on selected option
                                function toggleFileInputs() {
                                    if (ic1.value === "Tidak pernah" || ic1.value === "") {
                                        berkasic1.style.display = 'none';

                                    } else {
                                        berkasic1.style.display = 'block';

                                    }
                                }

                                // Toggle file input on page load
                                toggleFileInputs();

                                // Toggle file input when option is changed
                                ic1.addEventListener('change', toggleFileInputs);

                                // Form submission validation

                            });
                        </script>


                        <div>
                            <label>2.Kewirausahaan</label>


                            <h2>TK/SD I-III</h2>

                            <label for="kecilic2">• Hasil karya yang dipamerkan harus memiliki nilai jual / menarik untuk dipamerkan.</label>
                            <select name="kecilic2" id="kecilic2">
                                <option value="">Pilih</option>
                                <option value="Tidak pernah">Tidak pernah</option>
                                <option value="pernah membuat hasil karya">Pernah membuat hasil karya</option>
                            </select>

                            <div class="form-group">
                                <label for="kecilberkasic2" style="text-decoration: underline;">Hasil karya</label>
                                <input type="file" id="kecilberkasic2" name="kecilberkasic2" accept=".pdf, .jpg, .png">
                            </div>

                            <div class="form-group">
                                <label for="kecilberkasic22" style="text-decoration: underline;">video</label>
                                <input type="file" id="kecilberkasic22" name="kecilberkasic22" accept=".mp4">
                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var kecilic2 = document.getElementById('kecilic2');
                                    var kecilberkasic2Div = document.getElementById('kecilberkasic2').parentElement;
                                    var kecilberkasic22Div = document.getElementById('kecilberkasic22').parentElement;
                                    var kecilberkasic2 = document.getElementById('kecilberkasic2');
                                    var kecilberkasic22 = document.getElementById('kecilberkasic22');

                                    function toggleFileInputs() {
                                        if (kecilic2.value === "Tidak pernah" || kecilic2.value === "") {
                                            kecilberkasic2Div.style.display = 'none';
                                            kecilberkasic22Div.style.display = 'none';

                                        } else {
                                            kecilberkasic2Div.style.display = 'block';
                                            kecilberkasic22Div.style.display = 'block';

                                        }
                                    }

                                    // Toggle file input on page load
                                    toggleFileInputs();

                                    // Toggle file input when option is changed
                                    kecilic2.addEventListener('change', toggleFileInputs);

                                    // Form submission validation

                                });
                            </script>



                            <label for="kecilicb2">
                                • Laporan dibuat oleh guru TK dan SD (kls I-III) meliputi pendahuluan, dokumentasi kegiatan, daftar pengunjung, serta kesan dan pesan pengunjung.
                            </label>

                            <select name="kecilicb2" id="kecilicb2">
                                <option value="">Pilih</option>
                                <option value="Tidak pernah">Tidak pernah</option>
                                <option value="Melakukan laporan">Melakukan laporan</option>
                            </select>

                            <div class="form-group">
                                <label for="kecilberkasicb2" style="text-decoration: underline;">Laporan kegiatan beserta dokumentasi</label>
                                <input type="file" id="kecilberkasicb2" name="kecilberkasicb2" accept=".pdf, .doc, .docx">
                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var kecilicb2 = document.getElementById('kecilicb2');
                                    var kecilberkasicb2 = document.getElementById('kecilberkasicb2');

                                    // Function to show or hide file input based on selected option
                                    function toggleFileInputs() {
                                        if (kecilicb2.value === "Tidak pernah" || kecilicb2.value === "") {
                                            kecilberkasicb2.style.display = 'none';

                                        } else {
                                            kecilberkasicb2.style.display = 'block';

                                        }
                                    }

                                    // Toggle file input on page load
                                    toggleFileInputs();

                                    // Toggle file input when option is changed
                                    kecilicb2.addEventListener('change', toggleFileInputs);

                                    // Form submission validation


                                });
                            </script>

                            <h2>SD IV - SMK</h2>

                            <label for="ic2">• Perencanaan ( proposal )</label>

                            <select name="ic2" id="ic2">
                                <option></option>
                                <option>Tidak pernah</option>
                                <option>Melakukan Kegiatan</option>
                            </select>
                            <div class="form-group">
                                <label for="berkasic2" style="text-decoration: underline;">Perencanaan ( proposal ) </label>
                                <input type="file" id="berkasic2" name="berkasic2">
                            </div>
                            <script>
                                document.addEventListener(" DOMContentLoaded", function() {
                                    var ic2 = document.getElementById('ic2');
                                    var berkasic2 = document.getElementById('berkasic2');

                                    // Function to show or hide file inputs based on selected option
                                    function toggleFileInputs() {
                                        if (ic2.value === 'Tidak pernah') {
                                            berkasic2.style.display = 'none';
                                        } else {
                                            berkasic2.style.display = 'block';
                                        }
                                    }

                                    // Toggle file inputs on page load
                                    toggleFileInputs();

                                    // Toggle file inputs when option is changed
                                    ic2.addEventListener('change', function() {
                                        toggleFileInputs();
                                    });

                                    // Form submission validation

                                });
                            </script>

                            <div>
                                <label for="icb2">• Video presentasi siswa pembuatan produk / kegiatan perayaan</label>

                                <select name="icb2" id="icb2">
                                    <option></option>
                                    <option>Tidak pernah</option>
                                    <option>Melakukan Kegiatan</option>
                                </select>
                                <div class="form-group">
                                    <label for="berkasicb2" style="text-decoration: underline;">Video presentasi siswa pembuatan produk / kegiatan perayaan </label>
                                    <input type="file" id="berkasicb2" name="berkasicb2">
                                </div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var icb2 = document.getElementById('icb2');
                                        var berkasicb2 = document.getElementById('berkasicb2');

                                        // Function to show or hide file inputs based on selected option
                                        function toggleFileInputs() {
                                            if (icb2.value === 'Tidak pernah') {
                                                berkasicb2.style.display = 'none';
                                            } else {
                                                berkasicb2.style.display = 'block';
                                            }
                                        }

                                        // Toggle file inputs on page load
                                        toggleFileInputs();

                                        // Toggle file inputs when option is changed
                                        icb2.addEventListener('change', function() {
                                            toggleFileInputs();
                                        });


                                    });
                                </script>
                                <div>
                                    <label for="icc2">• Selling produk ( online / offline ) / pameran / perayaan</label>

                                    <select name="icc2" id="icc2">
                                        <option></option>
                                        <option>Tidak pernah</option>
                                        <option>Melakukan Kegiatan</option>
                                    </select>
                                    <div class="form-group">
                                        <label for="berkasicc2" style="text-decoration: underline;">Selling produk ( online / offline ) / pameran / perayaan</label>
                                        <input type="file" id="berkasicc2" name="berkasicc2" ">
    </div>
    <script>
        document.addEventListener(" DOMContentLoaded", function() {
                                            var icc2=document.getElementById('icc2');
                                            var berkasicc2=document.getElementById('berkasicc2');

                                            // Function to show or hide file inputs based on selected option
                                            function toggleFileInputs() {
                                            if (icc2.value==='Tidak pernah' ) {
                                            berkasicc2.style.display='none' ;
                                            } else {
                                            berkasicc2.style.display='block' ;
                                            }
                                            }

                                            // Toggle file inputs on page load
                                            toggleFileInputs();

                                            // Toggle file inputs when option is changed
                                            icc2.addEventListener('change', function() {
                                            toggleFileInputs();
                                            });

                                            // Form submission validation

                                            });
                                            </script>
                                        <div>
                                            <label for="icd2">• Pelaporan kegiatan</label>

                                            <select name="icd2" id="icd2">
                                                <option></option>
                                                <option>Tidak pernah</option>
                                                <option>Melakukan Kegiatan</option>
                                            </select>
                                            <div class="form-group">
                                                <label for="berkasicd2" style="text-decoration: underline;">Pelaporan kegiatan</label>
                                                <input type="file" id="berkasicd2" name="berkasicd2" ">
    </div>
    <script>
        document.addEventListener(" DOMContentLoaded", function() {
                                                    var icd2=document.getElementById('icd2');
                                                    var berkasicd2=document.getElementById('berkasicd2');

                                                    // Function to show or hide file inputs based on selected option
                                                    function toggleFileInputs() {
                                                    if (icd2.value==='Tidak pernah' ) {
                                                    berkasicd2.style.display='none' ;
                                                    } else {
                                                    berkasicd2.style.display='block' ;
                                                    }
                                                    }

                                                    // Toggle file inputs on page load
                                                    toggleFileInputs();

                                                    // Toggle file inputs when option is changed
                                                    icd2.addEventListener('change', function() {
                                                    toggleFileInputs();
                                                    });

                                                    // Form submission validation
                                                   
                                                    });
                                                    </script>

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