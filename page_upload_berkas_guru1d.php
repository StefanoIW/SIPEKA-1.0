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

            <form action="proses_upload_1d.php" method="post" enctype="multipart/form-data">
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

                    <h3>D. Mengikuti lomba sesuai kompetensinya</h3>
                    <div>
                        <!-- <label for="id1">1. Guru mengikuti lomba sesuai kompetensinya</label>

                        <select name="id1" id="id1">
                            <option value="">Pilih</option>
                            <option value="Tidak pernah">Tidak pernah</option>
                            <option value="Peserta">Peserta</option>

                        </select>
                        <div class="form-group" id="group_berkasid111">
                            <label for="berkasid111" style="text-decoration: underline;">Surat Tugas</label>
                            <input type="file" id="berkasid111" name="berkasid111" accept=".pdf, .jpg, .png">
                        </div>

                        <div class="form-group" id="group_berkasid1">
                            <label for="berkasid1" style="text-decoration: underline;">Flyer</label>
                            <input type="file" id="berkasid1" name="berkasid1" accept=".pdf, .jpg, .png">
                        </div>

                        <div class="form-group" id="group_berkasid11">
                            <label for="berkasid11" style="text-decoration: underline;">Dokumen pendaftaran lomba atau sertifikat keikutsertaan lomba</label>
                            <input type="file" id="berkasid11" name="berkasid11" accept=".pdf, .jpg, .png">
                        </div> -->



                        <script>
                            // document.addEventListener("DOMContentLoaded", function() {
                            //     var id1 = document.getElementById('id1');
                            //     var berkasid1 = document.getElementById('berkasid1');
                            //     var berkasid11 = document.getElementById('berkasid11');
                            //     var berkasid111 = document.getElementById('berkasid111');

                            //     var group_berkasid1 = document.getElementById('group_berkasid1');
                            //     var group_berkasid11 = document.getElementById('group_berkasid11');
                            //     var group_berkasid111 = document.getElementById('group_berkasid111');

                            //     function toggleFileInputs() {
                            //         if (id1.value === "Tidak pernah" || id1.value === "") {
                            //             group_berkasid1.style.display = "none";
                            //             group_berkasid11.style.display = "none";
                            //             group_berkasid111.style.display = "none";

                            //             berkasid1.removeAttribute("required");
                            //             berkasid11.removeAttribute("required");
                            //             berkasid111.removeAttribute("required");
                            //         } else if (id1.value === "Peserta") {
                            //             group_berkasid1.style.display = "block";
                            //             group_berkasid11.style.display = "block";
                            //             group_berkasid111.style.display = "block";

                            //             berkasid1.setAttribute("required", "required");
                            //             berkasid11.setAttribute("required", "required");
                            //             berkasid111.setAttribute("required", "required");
                            //         }
                            //     }

                            //     toggleFileInputs();
                            //     id1.addEventListener("change", toggleFileInputs);

                            //     var form = document.querySelector("form");
                            //     form.addEventListener("submit", function(event) {
                            //         if (id1.value === "Peserta" && (berkasid1.files.length === 0 || berkasid11.files.length === 0)) {
                            //             event.preventDefault();
                            //             alert("Mohon unggah flyer dan dokumen pendaftaran lomba jika Anda adalah peserta.");
                            //         }
                            //         if (id1.value === "Juara" && (berkasid1.files.length === 0 || berkasid11.files.length === 0 || berkasid111.files.length === 0)) {
                            //             event.preventDefault();
                            //             alert("Mohon unggah flyer, dokumen pendaftaran lomba, dan foto/piagam kejuaraan jika Anda meraih juara.");
                            //         }
                            //     });
                            // });
                        </script>

                        <label for="id2">1. Guru mengikuti lomba sesuai kompetensinya</label>
                        <select name="id2" id="id2">
                            <option value="">-- Pilih --</option>
                            <option value="Tidak pernah">Tidak pernah</option>
                            <option value="peserta">Peserta</option>
                            <option value="lolos">Lolos babak penyisihan</option>
                            <option value="juara">Juara lomba (minimal kejuaraan internal institusi/jenjang)</option>
                        </select>

                        <div class="form-group">
                            <label for="berkasid2" style="text-decoration: underline;">Surat Tugas</label>
                            <input type="file" id="berkasid2" name="berkasid2">
                        </div>

                        <div class="form-group">
                            <label for="berkasid22" style="text-decoration: underline;">Dokumentasi</label>
                            <input type="file" id="berkasid22" name="berkasid22">
                        </div>

                        <div class="form-group">
                            <label for="berkasid222" style="text-decoration: underline;">Sertifikat</label>
                            <input type="file" id="berkasid222" name="berkasid222">
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var id2 = document.getElementById('id2');
                                var berkasid2 = document.getElementById('berkasid2');
                                var berkasid22 = document.getElementById('berkasid22');
                                var berkasid222 = document.getElementById('berkasid222');

                                function toggleFileInputs() {
                                    const showFiles = id2.value !== '' && id2.value !== 'Tidak pernah';

                                    // Show/hide each file input group
                                    berkasid2.parentElement.style.display = showFiles ? 'block' : 'none';
                                    berkasid22.parentElement.style.display = showFiles ? 'block' : 'none';
                                    berkasid222.parentElement.style.display = showFiles ? 'block' : 'none';
                                }

                                // Initial toggle
                                toggleFileInputs();

                                // Update on change
                                id2.addEventListener('change', toggleFileInputs);

                                // Validasi form submit
                                var form = document.querySelector('form');
                                form.addEventListener('submit', function(event) {
                                    let selected = id2.value;

                                    if (selected === 'lolos') {
                                        if (berkasid2.files.length === 0 || berkasid22.files.length === 0) {
                                            
                                        }
                                    } else if (selected === 'juara') {
                                        if (
                                            berkasid2.files.length === 0 ||
                                            berkasid22.files.length === 0 ||
                                            berkasid222.files.length === 0
                                        ) {
                                            
                                        }
                                    }
                                });
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