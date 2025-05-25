
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
        html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    background: url('bgnusput.jpg') no-repeat center center fixed;
    background-size: 100% 100%; /* Mengatur ukuran latar belakang sesuai halaman */
    background-position: center center;
    font-family: Arial, sans-serif;

}
.navbar-guru {
    background-color: #3498db; /* Ubah warna background ke warna sebelumnya */
    border: 1px solid #2978a0;
    padding: 10px 0;
    text-align: center; /* Posisi teks navbar di tengah */
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
        color: #333; /* Warna teks label */
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
        background: #f9f9f9; /* Warna latar belakang select */
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
    background-color: #0073e6; /* Warna biru */
    color: #fff; /* Teks putih */
    padding: 15px 30px; /* Ukuran besar */
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0052a5; /* Warna biru yang sedikit lebih gelap saat digulirkan */
}
h2, h3 {
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
     $tampilPeg=mysqli_query($koneksi, "SELECT * FROM tabel_jabatan WHERE username='$_SESSION[username]'");
     $peg=mysqli_fetch_array($tampilPeg);
    ?>

    <div class="container">
    <?php
    $currentDate = date('d-m-Y');
    $Q = mysqli_query ($koneksi,"SELECT* FROM tabel_p_pendidikan2");
    $R = mysqli_fetch_array ($Q);
    // Tanggal yang diizinkan untuk mengakses halaman (9 Februari setiap tahun)
    $allowedDate = date('d-m') === '12-02';
    if ($allowedDate || $R['Aktivasi'] == '1') {
        ?>
        
    <form action="proses_upload_3.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id">ID Guru:</label>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $peg['id'];?>" readonly>
            </div>

            <div class="form-group">
                <label for="nama">Nama Guru:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $peg['nama'];?>" readonly>
            </div>
            <div class="form-group">
     <label for="tahun_penilaian">Tahun penilaian:</label>
      <input type="number" id="tahun_penilaian" name="tahun_penilaian" min="2023" max="2030" >
<h2>III. Pengembangan Teman Sejawat</h2>
<h3>A. Pendampingan Teman Sejawat</h3>
            <div>
                <label for="iiia1">1. Guru memberikan pendampingan kepada teman sejawat dengan durasi minimal 1 minggu untuk 2x pertemuan </label>
            
                <select name="iiia1" id="iiia1">
                    <option></option>
                    <option>Tidak pernah</option>
                    <option >Pendampingan teman sejawat</option>
                </select>
                <div class="form-group">
        <label for="berkasiiia1"style="text-decoration: underline;">Surat tugas:</label>
        <input type="file" id="berkasiiia1" name="berkasiiia1" >
    </div>

    <div class="form-group">
        <label for="berkasiiia11"  style="text-decoration: underline;">Jurnal pendampingan:</label>
        <input type="file" id="berkasiiia11" name="berkasiiia11">
    </div>

    <!-- Add file input for berkasiaaa1 -->
    <div class="form-group">
        <label for="berkasiiia111"  style="text-decoration: underline;">Foto kegiatan saat pendampingan yang sesuai:</label>
        <input type="file" id="berkasiiia111" name="berkasiiia111" >
    </div>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    var iiia1 = document.getElementById('iiia1');
    var berkasiiia1 = document.getElementById('berkasiiia1');
    var berkasiiia11 = document.getElementById('berkasiiia11');
    var berkasiiia111 = document.getElementById('berkasiiia111');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (iiia1.value === 'Tidak pernah') {
            berkasiiia1.style.display = 'none';
            berkasiiia11.style.display = 'none';
            berkasiiia111.style.display = 'none';
        } else {
            berkasiiia1.style.display = 'block';
            berkasiiia11.style.display = 'block';
            berkasiiia111.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iiia1.addEventListener('change', function() {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        if (iiia1.value !== 'Tidak pernah' && (berkasiiia1.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas di Pendampingan teman sejawat');
        }
    });
});
</script>
<h3>B. Sharing Internal</h3>
            <div>
                <label for="iiib1">1.Sharing internal dilakukan oleh guru dalam sebuah forum pertemuan.Jika guru sebagai</label>
             
                <select name="iiib1" id="iiib1">
                    <option></option>
                    <option>Tidak pernah</option>
                    <option >Moderator/Host</option>
                    <option >Narasumber</option>
                </select>
                <div class="form-group">
                    <label style="text-decoration: underline;">Narasumber : Dibuktikan dengan materi presentasi, surat tugas, daftar hadir peserta, dokumentasi kegiatan dan sertifikat (Minimal 4 bukti terpenuhi) <br> Moderator/Host : Dibuktikan dengan surat tugas, dokumentasi kegiatan, sertifikat (Minimal 2 bukti terpenuhi)</label>
        <label for="berkasiiib1"style="text-decoration: underline;">Materi Presentasi:</label>
        <input type="file" id="berkasiiib1" name="berkasiiib1" >
    </div>

    <div class="form-group">
        <label for="berkasiiib11"  style="text-decoration: underline;">Surat Tugas:</label>
        <input type="file" id="berkasiiib11" name="berkasiiib11">
    </div>

    <div class="form-group">
        <label for="berkasiiib111" style="text-decoration: underline;">Daftar Hadir Peserta:</label>
        <input type="file" id="berkasiiib111" name="berkasiiib111" >
    </div>
    <div class="form-group">
        <label for="berkasiiib1111"  style="text-decoration: underline;">Dokumentasi Kegiatan:</label>
        <input type="file" id="berkasiiib1111" name="berkasiiib1111" >
    </div>
    <div class="form-group">
        <label for="berkasiiib111"  style="text-decoration: underline;">Sertifikat :</label>
        <input type="file" id="berkasiiib11111" name="berkasiiib11111" >
    </div>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    var iiib1 = document.getElementById('iiib1');
    var berkasiiib1 = document.getElementById('berkasiiib1');
    var berkasiiib11 = document.getElementById('berkasiiib11');
    var berkasiiib111 = document.getElementById('berkasiiib111');
    var berkasiiib1111 = document.getElementById('berkasiiib1111');
    var berkasiiib11111 = document.getElementById('berkasiiib11111');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (iiib1.value === 'Tidak pernah') {
            berkasiiib1.style.display = 'none';
            berkasiiib11.style.display = 'none';
            berkasiiib111.style.display = 'none';
            berkasiiib1111.style.display = 'none';
            berkasiiib11111.style.display = 'none';
        } else {
            berkasiiib1.style.display = 'block';
            berkasiiib11.style.display = 'block';
            berkasiiib111.style.display = 'block';
            berkasiiib1111.style.display = 'block';
            berkasiiib11111.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iiib1.addEventListener('change', function() {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        if (iiib1.value !== 'Tidak pernah' && (berkasiiib1.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas di Sharing internal');
        }
    });
});
</script>
<h3>C. Partisipasi Pelatihan / Kegiatan eksternal</h3>
<div>
                <label for="iiic1">1. Guru dapat berpartisipasi dalam pelatihan / kegiatan yang diselenggarakan oleh pihak eksternal / lintas jenjang.Jika guru sebagai :</label>
            
                <select name="iiic1" id="iiic1">
                    <option></option>
                    <option>Tidak pernah</option>
                    <option >Moderator/Host/Juri/Guru pamong / penugasan khusus</option>
                    <option >Narasumber</option>
                </select>
                <label style="text-decoration: underline;">Narasumber : Dibuktikan dengan materi presentasi, surat tugas, daftar hadir peserta, dokumentasi kegiatan dan sertifikat (Minimal 4 bukti terpenuhi) <br> Moderator/Host : Dibuktikan dengan surat tugas, dokumentasi kegiatan, sertifikat (Minimal 2 bukti terpenuhi)</label>
                <div class="form-group">
        <label for="berkasiiic1"  style="text-decoration: underline;">Materi Presentasi:</label>
        <input type="file" id="berkasiiic1" name="berkasiiic1" >
    </div>

    <div class="form-group">
        <label for="berkasiiic11"  style="text-decoration: underline;">Surat Tugas:</label>
        <input type="file" id="berkasiiic11" name="berkasiiic11">
    </div>

    <!-- Add file input for berkasiaaa1 -->
    <div class="form-group">
        <label for="berkasiiic111" style="text-decoration: underline;">Daftar Hadir Peserta:</label>
        <input type="file" id="berkasiiic111" name="berkasiiic111" >
    </div>
    <div class="form-group">
        <label for="berkasiiic1111" style="text-decoration: underline;">Dokumentasi Kegiatan:</label>
        <input type="file" id="berkasiiic1111" name="berkasiiic1111" >
    </div>
    <div class="form-group">
        <label for="berkasiiic11111" style="text-decoration: underline;">Sertifikat:</label>
        <input type="file" id="berkasiiic11111" name="berkasiiic11111" >
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
        if (iiic1.value === 'Tidak pernah') {
            berkasiiic1.style.display = 'none';
            berkasiiic11.style.display = 'none';
            berkasiiic111.style.display = 'none';
            berkasiiic1111.style.display = 'none';
            berkasiiic11111.style.display = 'none';
        } else {
            berkasiiic1.style.display = 'block';
            berkasiiic11.style.display = 'block';
            berkasiiic111.style.display = 'block';
            berkasiiic1111.style.display = 'block';
            berkasiiic11111.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iiic1.addEventListener('change', function() {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        if (iiic1.value !== 'Tidak pernah' && (berkasiiic1.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas di Guru dapat berpartisipasi dalam pelatihan / kegiatan yang diselenggarakan oleh pihak eksternal / lintas jenjang.Jika guru sebagai :');
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
    <script src="berkasia1.js"></script>
</body>
</html>