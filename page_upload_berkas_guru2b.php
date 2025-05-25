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

            <form action="proses_upload_2b.php" method="post" enctype="multipart/form-data">
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

                    <h3>B. Kegiatan Eksternal</h3>
                    <div>



                        <div class="form-group" style="display: none;">
                            <label for="berkasiib11">Berkas 2:</label>
                            <input type="file" id="berkasiib11" name="berkasiib11">
                        </div>

                        <!-- Add file input for berkasiaaa1 -->
                        <div class="form-group" style="display: none;">
                            <label for="berkasiib111">Berkas 3:</label>
                            <input type="file" id="berkasiib111" name="berkasiib111">
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var iib1 = document.getElementById('iib1');
                                var berkasiib1 = document.getElementById('berkasiib1');
                                var berkasiib11 = document.getElementById('berkasiib11');
                                var berkasiib111 = document.getElementById('berkasiib111');

                                // Function to show or hide file inputs based on selected option
                                function toggleFileInputs() {
                                    if (iib1.value === 'Tidak pernah') {
                                        berkasiib1.style.display = 'none';
                                        berkasiib11.style.display = 'none';
                                        berkasiib111.style.display = 'none';
                                    } else {
                                        berkasiib1.style.display = 'block';
                                        berkasiib11.style.display = 'block';
                                        berkasiib111.style.display = 'block';
                                    }
                                }

                                // Toggle file inputs on page load
                                toggleFileInputs();

                                // Toggle file inputs when option is changed
                                iib1.addEventListener('change', function() {
                                    toggleFileInputs();
                                });

                                // Form submission validation
                               
                            });
                        </script>

                        <div>


                            <div>
                                <label>1. Pembimbing Lomba</label>
                                <label for="iib3">• Pembimbing Peserta Lomba</label>

                                <select name="iib3" id="iib3">
                                    <option></option>
                                    <option>Tidak pernah</option>
                                    <option>Pembimbing peserta lomba</option>
                                </select>

                                <div class="form-group" id="group-berkasiib3">
                                    <label for="berkasiib3" style="text-decoration: underline;">Surat tugas dari Pimpinan jenjang:</label>
                                    <input type="file" id="berkasiib3" name="berkasiib3">
                                </div>

                                <div class="form-group" id="group-berkasiib33">
                                    <label for="berkasiib33" style="text-decoration: underline;">Flyer atau Undangan:</label>
                                    <input type="file" id="berkasiib33" name="berkasiib33">
                                </div>

                                <div class="form-group" id="group-berkasiib333">
                                    <label for="berkasiib333" style="text-decoration: underline;">Sertifikat:</label>
                                    <input type="file" id="berkasiib333" name="berkasiib333">
                                </div>

                                <div class="form-group" id="group-berkasiib3333">
                                    <label for="berkasiib3333" style="text-decoration: underline;">Dibuktikan dari postingan IG pribadi guru (nama akun sesuai nama guru):</label>
                                    <input type="file" id="berkasiib3333" name="berkasiib3333">
                                </div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var iib3 = document.getElementById('iib3');
                                        var groups = [
                                            document.getElementById('group-berkasiib3'),
                                            document.getElementById('group-berkasiib33'),
                                            document.getElementById('group-berkasiib333'),
                                            document.getElementById('group-berkasiib3333')
                                        ];

                                        function toggleFileInputs() {
                                            const show = iib3.value !== 'Tidak pernah';
                                            groups.forEach(group => {
                                                group.style.display = show ? 'block' : 'none';
                                            });
                                        }

                                        toggleFileInputs();

                                        iib3.addEventListener('change', toggleFileInputs);

                                        var form = document.querySelector('form');
                                        form.addEventListener('submit', function(event) {
                                            if (iib3.value !== 'Tidak pernah') {
                                                const allFilled = groups.every(group => {
                                                    const input = group.querySelector('input[type="file"]');
                                                    return input && input.value !== '';
                                                });

                                               
                                            }
                                        });
                                    });
                                </script>


                                <label for="iib3_tambah">• Pendamping Peserta Lomba</label>
                                <select name="iib3_tambah" id="iib3_tambah">
                                    <option></option>
                                    <option>Tidak pernah</option>
                                    <option>Pendamping peserta lomba</option>
                                </select>

                                <div class="form-group" id="group_berkasiib3_tambah">
                                    <label for="berkasiib3_tambah" style="text-decoration: underline;">Surat tugas dari Pimpinan jenjang :</label>
                                    <input type="file" id="berkasiib3_tambah" name="berkasiib3_tambah">
                                </div>

                                <div class="form-group" id="group_berkasiib33_tambah">
                                    <label for="berkasiib33_tambah" style="text-decoration: underline;">Flyer atau Undangan:</label>
                                    <input type="file" id="berkasiib33_tambah" name="berkasiib33_tambah">
                                </div>

                                <div class="form-group" id="group_berkasiib333_tambah">
                                    <label for="berkasiib333_tambah" style="text-decoration: underline;">Sertifikat:</label>
                                    <input type="file" id="berkasiib333_tambah" name="berkasiib333_tambah">
                                </div>

                                <div class="form-group" id="group_berkasiib3333_tambah">
                                    <label for="berkasiib3333_tambah" style="text-decoration: underline;">Dibuktikan dari postingan IG pribadi guru (nama akun sesuai nama guru):</label>
                                    <input type="file" id="berkasiib3333_tambah" name="berkasiib3333_tambah">
                                </div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        const selectIib3 = document.getElementById('iib3_tambah');
                                        const fileGroups = [
                                            document.getElementById('group_berkasiib3_tambah'),
                                            document.getElementById('group_berkasiib33_tambah'),
                                            document.getElementById('group_berkasiib333_tambah'),
                                            document.getElementById('group_berkasiib3333_tambah')
                                        ];

                                        function toggleFileInputs() {
                                            const show = selectIib3.value !== 'Tidak pernah' && selectIib3.value !== '';
                                            fileGroups.forEach(group => group.style.display = show ? 'block' : 'none');
                                        }

                                        toggleFileInputs(); // on page load
                                        selectIib3.addEventListener('change', toggleFileInputs);

                                        const form = document.querySelector('form');
                                        if (form) {
                                            form.addEventListener('submit', function(event) {
                                                if (selectIib3.value !== 'Tidak pernah' && selectIib3.value !== '') {
                                                    const requiredFiles = [
                                                        document.getElementById('berkasiib3_tambah').value,
                                                        document.getElementById('berkasiib33_tambah').value,
                                                        document.getElementById('berkasiib333_tambah').value,
                                                        document.getElementById('berkasiib3333_tambah').value
                                                    ];

                                                  
                                                    
                                                }
                                            });
                                        }
                                    });
                                </script>



                                <label for="iiba3">• Pembimbing Pemenang Lomba</label>
                                <select name="iiba3" id="iiba3">
                                    <option></option>
                                    <option>Tidak pernah</option>
                                    <option>Pembimbing pemenang lomba dan meraih kejuaraan tingkat kecamatan</option>
                                    <option>Pembimbingan pemenang lomba dan meraih kejuaraan tingkat kota</option>
                                    <option>Pembimbingan pemenang lomba dan meraih kejuaraan tingkat Propinsi</option>
                                </select>

                                <!-- FILE INPUT DIBUNGKUS DIV UNTUK DIKONTROL DISPLAY-NYA -->
                                <div class="form-group group-iiba3">
                                    <label for="berkasiiba3" style="text-decoration: underline;">Surat tugas dari Pimpinan jenjang:</label>
                                    <input type="file" id="berkasiiba3" name="berkasiiba3">
                                </div>

                                <div class="form-group group-iiba3">
                                    <label for="berkasiiba33" style="text-decoration: underline;">Flyer atau Undangan:</label>
                                    <input type="file" id="berkasiiba33" name="berkasiiba33">
                                </div>

                                <div class="form-group group-iiba3">
                                    <label for="berkasiiba333" style="text-decoration: underline;">Sertifikat:</label>
                                    <input type="file" id="berkasiiba333" name="berkasiiba333">
                                </div>

                                <div class="form-group group-iiba3">
                                    <label for="berkasiiba3333" style="text-decoration: underline;">Piagam/Sertifikat Kejuaraan:</label>
                                    <input type="file" id="berkasiiba3333" name="berkasiiba3333">
                                </div>

                                <div class="form-group group-iiba3">
                                    <label for="berkasiiba33333" style="text-decoration: underline;">Dibuktikan dari postingan IG pribadi guru (nama akun sesuai nama guru):</label>
                                    <input type="file" id="berkasiiba33333" name="berkasiiba33333">
                                </div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var iiba3 = document.getElementById('iiba3');
                                        var fileGroups = document.querySelectorAll('.group-iiba3');

                                        function toggleFileInputs() {
                                            if (iiba3.value === 'Tidak pernah' || iiba3.value === '') {
                                                fileGroups.forEach(group => group.style.display = 'none');
                                            } else {
                                                fileGroups.forEach(group => group.style.display = 'block');
                                            }
                                        }

                                        toggleFileInputs(); // Load awal

                                        iiba3.addEventListener('change', toggleFileInputs);

                                        // Validasi form
                                        var form = document.querySelector('form');
                                        form.addEventListener('submit', function(event) {
                                            if (iiba3.value !== 'Tidak pernah' && iiba3.value !== '') {
                                                var allFilled = true;
                                                fileGroups.forEach(group => {
                                                    var input = group.querySelector('input[type="file"]');
                                                    if (input && input.value === '') {
                                                        allFilled = false;
                                                    }
                                                });

                                               
                                            }
                                        });
                                    });
                                </script>

                                <div>
                                    <label>2.Pendampingan</label>
                                    <label for="iib2">• Pendamping Tampilan/Event</label>
                                    <select name="iib2" id="iib2">
                                        <option></option>
                                        <option>Tidak pernah</option>
                                        <option>Pendamping tampilan/event</option>
                                    </select>
                                    <div class="form-group">
                                        <label for="berkasiib2" style="text-decoration: underline;">Dibuktikan dengan surat tugas dari pimpinan jenjang:</label>
                                        <input type="file" id="berkasiib2" name="berkasiib2">
                                    </div>

                                    <div class="form-group">
                                        <label for="berkasiib22" style="text-decoration: underline;">Laporan kegiatan:</label>
                                        <input type="file" id="berkasiib22" name="berkasiib22">
                                    </div>

                                    <!-- Add file input for berkasiaaa1 -->
                                    <div class="form-group" style="display: none;">
                                        <label for="berkasiib222">Berkas 3:</label>
                                        <input type="file" id="berkasiib222" name="berkasiib222">
                                    </div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            var iib2 = document.getElementById('iib2');
                                            var berkasiib2 = document.getElementById('berkasiib2');
                                            var berkasiib22 = document.getElementById('berkasiib22');
                                            var berkasiib222 = document.getElementById('berkasiib222');

                                            // Function to show or hide file inputs based on selected option
                                            function toggleFileInputs() {
                                                if (iib2.value === 'Tidak pernah') {
                                                    berkasiib2.style.display = 'none';
                                                    berkasiib22.style.display = 'none';
                                                    berkasiib222.style.display = 'none';
                                                } else {
                                                    berkasiib2.style.display = 'block';
                                                    berkasiib22.style.display = 'block';
                                                    berkasiib222.style.display = 'block';
                                                }
                                            }

                                            // Toggle file inputs on page load
                                            toggleFileInputs();

                                            // Toggle file inputs when option is changed
                                            iib2.addEventListener('change', function() {
                                                toggleFileInputs();
                                            });

                                            // Form submission validation
                                           
                                        });
                                    </script>
                                    <label for="iib4"> • Pendamping outingclass / prakerin/ fieldtrip</label>

                                    <select name="iib4" id="iib4">
                                        <option></option>
                                        <option>Tidak pernah</option>
                                        <option>Pendamping outingclass / prakerin/ fieldtrip</option>
                                    </select>
                                    <div class="form-group">
                                        <label for="berkasiib4" style="text-decoration: underline;"> Surat tugas dari Pimpinan Jenjang :</label>
                                        <input type="file" id="berkasiib4" name="berkasiib4">
                                    </div>

                                    <div class="form-group">
                                        <label for="berkasiib44" style="text-decoration: underline;">Foto kegiatan sesuai dengan kegiatan yang didampingi:</label>
                                        <input type="file" id="berkasiib44" name="berkasiib44">
                                    </div>

                                    <!-- Add file input for berkasiaaa1 -->
                                    <div class="form-group" style="display: none;">
                                        <label for="berkasiib444">Berkas 3:</label>
                                        <input type="file" id="berkasiib444" name="berkasiib444">
                                    </div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            var iib4 = document.getElementById('iib4');
                                            var berkasiib4 = document.getElementById('berkasiib4');
                                            var berkasiib44 = document.getElementById('berkasiib44');
                                            var berkasiib444 = document.getElementById('berkasiib444');

                                            // Function to show or hide file inputs based on selected option
                                            function toggleFileInputs() {
                                                if (iib4.value === 'Tidak pernah') {
                                                    berkasiib4.style.display = 'none';
                                                    berkasiib44.style.display = 'none';
                                                    berkasiib444.style.display = 'none';
                                                } else {
                                                    berkasiib4.style.display = 'block';
                                                    berkasiib44.style.display = 'block';
                                                    berkasiib444.style.display = 'block';
                                                }
                                            }

                                            // Toggle file inputs on page load
                                            toggleFileInputs();

                                            // Toggle file inputs when option is changed
                                            iib4.addEventListener('change', function() {
                                                toggleFileInputs();
                                            });

                                            // Form submission validation
                                            var form = document.querySelector('form');
                                            form.addEventListener('submit', function(event) {
                                               
                                            });
                                        });
                                    </script>
                                    <label for="iibb4"> • Pendamping tampilan/event/pameran PPD</label>

                                    <select name="iibb4" id="iibb4">
                                        <option></option>
                                        <option>Tidak pernah</option>
                                        <option>Pendamping tampilan/event/pameran PPD</option>
                                    </select>
                                    <div class="form-group">
                                        <label for="berkasiibb4" style="text-decoration: underline;"> Surat tugas dari Pimpinan Jenjang :</label>
                                        <input type="file" id="berkasiibb4" name="berkasiibb4">
                                    </div>

                                    <div class="form-group">
                                        <label for="berkasiibb44" style="text-decoration: underline;">Foto kegiatan sesuai dengan kegiatan yang didampingi:</label>
                                        <input type="file" id="berkasiibb44" name="berkasiibb44">
                                    </div>

                                    <!-- Add file input for berkasiaaa1 -->
                                    <div class="form-group" style="display: none;">
                                        <label for="berkasiibb444">Berkas 3:</label>
                                        <input type="file" id="berkasiibb444" name="berkasiibb444">
                                    </div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            var iibb4 = document.getElementById('iibb4');
                                            var berkasiibb4 = document.getElementById('berkasiibb4');
                                            var berkasiibb44 = document.getElementById('berkasiibb44');
                                            var berkasiibb444 = document.getElementById('berkasiibb444');

                                            // Function to show or hide file inputs based on selected option
                                            function toggleFileInputs() {
                                                if (iibb4.value === 'Tidak pernah') {
                                                    berkasiibb4.style.display = 'none';
                                                    berkasiibb44.style.display = 'none';
                                                    berkasiibb444.style.display = 'none';
                                                } else {
                                                    berkasiibb4.style.display = 'block';
                                                    berkasiibb44.style.display = 'block';
                                                    berkasiibb444.style.display = 'block';
                                                }
                                            }

                                            // Toggle file inputs on page load
                                            toggleFileInputs();

                                            // Toggle file inputs when option is changed
                                            iibb4.addEventListener('change', function() {
                                                toggleFileInputs();
                                            });

                                            // Form submission validation
                                            var form = document.querySelector('form');
                                            form.addEventListener('submit', function(event) {
                                                
                                            });
                                        });
                                    </script>
                                    <label for="iibc4"> • Pendamping home visit</label>
                                    <select name="iibc4" id="iibc4">
                                        <option></option>
                                        <option>Tidak pernah</option>
                                        <option>Pendamping home visit</option>
                                    </select>
                                    <div class="form-group">
                                        <label for="berkasiibc4" style="text-decoration: underline;">Surat tugas dari Pimpinan Jenjang :</label>
                                        <input type="file" id="berkasiibc4" name="berkasiibc4">
                                    </div>

                                    <div class="form-group">
                                        <label for="berkasiibc44" style="text-decoration: underline;">Foto kegiatan sesuai dengan kegiatan yang didampingi:</label>
                                        <input type="file" id="berkasiibc44" name="berkasiibc44">
                                    </div>

                                    <!-- Add file input for berkasiaaa1 -->
                                    <div class="form-group" style="display: none;">
                                        <label for="berkasiibc444">Berkas 3:</label>
                                        <input type="file" id="berkasiibc444" name="berkasiibc444">
                                    </div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            var iibc4 = document.getElementById('iibc4');
                                            var berkasiibc4 = document.getElementById('berkasiibc4');
                                            var berkasiibc44 = document.getElementById('berkasiibc44');
                                            var berkasiibc444 = document.getElementById('berkasiibc444');

                                            // Function to show or hide file inputs based on selected option
                                            function toggleFileInputs() {
                                                if (iibc4.value === 'Tidak pernah') {
                                                    berkasiibc4.style.display = 'none';
                                                    berkasiibc44.style.display = 'none';
                                                    berkasiibc444.style.display = 'none';
                                                } else {
                                                    berkasiibc4.style.display = 'block';
                                                    berkasiibc44.style.display = 'block';
                                                    berkasiibc444.style.display = 'block';
                                                }
                                            }

                                            // Toggle file inputs on page load
                                            toggleFileInputs();

                                            // Toggle file inputs when option is changed
                                            iibc4.addEventListener('change', function() {
                                                toggleFileInputs();
                                            });

                                            // Form submission validation
                                            
                                        });
                                    </script>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="berkasiib1" style="text-decoration: underline;">Dibuktikan dengan screenshoot dari postingan IG pribadi guru (nama akun sesuai nama guru) ( dipilih salah satu kegiatan sesuai kegiatan yang dilaksanakan )</label>
                                <input type="file" id="berkasiib1" name="berkasiib1">
                            </div> -->
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