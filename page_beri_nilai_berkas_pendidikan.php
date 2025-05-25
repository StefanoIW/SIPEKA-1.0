<?php
session_start();
if (!isset($_SESSION['id']))
{
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
    <title>Validasi Nilai Berkas</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Tambahkan file CSS eksternal -->

    <style>
      html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    background: url('bgnusput.jpg') no-repeat center center fixed;
    background-size: cover; /* Mengubah background-size menjadi cover agar latar belakang mengisi seluruh layar */
    background-position: center center;
    font-family: Arial, sans-serif;
}

.navbar-pendidikan {
    background-color: #3498db;
    border: 1px solid #2978a0;
    padding: 10px 0;
    text-align: center;
}

.navbar-pendidikan a {
    display: inline-block;
    color: white;
    padding: 14px 16px;
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
    border-radius: 10px;
    padding: 20px;
    margin: 20px auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 800px; /* Memperluas lebar konten agar lebih lega */
    text-align: left; /* Posisikan teks konten ke kiri */
}

.btn {
    background-color: #349DB3;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #265C70;
}

img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 10px auto;
}

h1 {
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #333; /* Warna teks label */
}

.form-control {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc; /* Garis pinggir input */
    border-radius: 5px;
}

.form-control:focus {
    outline: none; /* Hilangkan focus outline saat input aktif */
    border-color: #349DB3; /* Warna border saat input aktif */
}

/* Membuat tampilan lebih jelas untuk input yang memiliki file terlampir */
.form-group input[type="file"] {
    border: none;
    padding: 0;
    background: none;
    border-bottom: 1px dashed #349DB3;
}

/* Membuat tampilan lebih jelas untuk link Gdrive */
.form-group label[for^="link"] {
    color: #349DB3;
    font-style: italic;
}

/* Membuat tampilan yang lebih baik untuk gambar yang ditampilkan */
.form-group img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 10px auto;
}

/* Mengubah tampilan tombol "Simpan" */
.btn {
    background-color: #349DB3;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #265C70;
}


/* Membuat dropdown berukuran lebih besar */
select {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
}
/* Mengubah warna teks "berkas berupa link Gdrive" menjadi biru */
label[for^="link"] {
    color: blue;
}
label[for^="apoinia"],
label[for^="apoinib"],
label[for^="apoinic"],
label[for^="apoinid"],
label[for^="apoinie"],
label[for^="apoiniia"],
label[for^="apoiniib"],
label[for^="apoiniiia"],
label[for^="apoiniiib"],
label[for^="apoiniiic"],
label[for^="apoiniv"] {
    color: blue;
    font-weight: bold;
}
h2, h3 {
    color: blue;
}


    </style>
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
    <?php
  
    $id_penilaian = $_GET['id_penilaian'];
   
    $data = mysqli_query($koneksi,"SELECT * from tabel_p_pendidikan2 where id_penilaian = '$id_penilaian'");
    while($d = mysqli_fetch_array($data)){ //ngambil data dari query
        
    ?>
    <form method="post"action="proses_nilai_berkas.php" enctype="multipart/form-data">
    <div class="container">
        <h1>Validasi Nilai Berkas</h1>
        <div class="form-group">
            <label for="id_penilaian">id_penilaian:</label>
            <input type="text" class="form-control" id="id_penilaian" name="id_penilaian" value="<?php echo $d['id_penilaian'];?>" readonly>
        </div>
        <div class="form-group">
            <label for="id">ID Guru:</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $d['id'];?>" readonly>
        </div>
        <div class="form-group">
            <label for="id">Nama Guru:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $d['nama'];?>" readonly>
        </div>
        <h2>I.Pengembangan diri sendiri</h2>
        <h3>A. Peningkatan kompetensi</h3>

        <div class="form-group">
        <label>1.Mengikuti Workshop</label>
            <label for="ia1"> • Mengikuti workshop/pelatihan Workshop/pelatihan Internal/ Forum KKG/MGMP</label>
            <input type="text" class="form-control" id="ia1" name="ia1" value="<?php echo $d['ia1'];?>" >
        </div>

        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasia1', 'berkasia11'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
    
    
}

?>
<form action="proses_nilai_berkas.php" method="post">
    <label for="apoinia1">Nilai Validasi :</label>
    <select name="apoinia1" id="apoinia1">

    <option value="0">0</option>
    <option value="1">1</option>

    </select>

</form>
<label for="poinia1">Nilai Sistem:</label>
    <select name="poinia1" id="poinia1">
        <option><?php echo $row['poinia1']; ?></option>
    </select>
</form>



</div>
<div class="form-group">
            <label for="iab1"> • Mengikuti workshop/pelatihan Provinsi / Nasional</label>
            <input type="text" class="form-control" id="iab1" name="iab1" value="<?php echo $d['iab1'];?>" >
        </div>

        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasiab1', 'berkasiab11'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
    
    
}

?>

    <label for="apoiniab1">Nilai Validasi :</label>
    <select name="apoiniab1" id="apoiniab1">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
    </select>

</form>
<label for="poiniab1">Nilai Sistem:</label>
    <select name="poiniab1" id="poiniab1">
        <option><?php echo $row['poiniab1']; ?></option>
    </select>
</form>

</div>
<div class="form-group">
            <label for="iac1"> • Mengikuti workshop/pelatihan Internasional ( laporan dalam Bhs Inggris )</label>
            <input type="text" class="form-control" id="iac1" name="iac1" value="<?php echo $d['iac1'];?>" >
        </div>

        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasiac1', 'berkasiac11'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
    
    
}

?>

    <label for="apoiniac1">Nilai Validasi :</label>
    <select name="apoiniac1" id="apoiniac1">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>

</form>
<label for="poiniac1">Nilai Sistem:</label>
    <select name="poiniac1" id="poiniac1">
        <option><?php echo $row['poiniac1']; ?></option>
    </select>
</form>


</div>

        <div class="form-group">
            <label for="ia2">2. Implementasi pelatihan/ workshop :</label>
            <input type="text" class="form-control" id="ia2" name="ia2" value="<?php echo $d['ia2'];?>" >
        </div>
        <div>
        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasia2', 'berkasia22'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>
</div>

    <label for="apoinia2">Nilai Validasi :</label>
    <select name="apoinia2" id="apoinia2">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>

</form>
<label for="poinia2">Nilai Sistem:</label>
    <select name="poinia2" id="poinia2">
        <option><?php echo $row['poinia2']; ?></option>
    </select>
</form>
</div>

        <h3>B. Hasil Karya</h3>

        <div class="form-group">
            <label for="ib1">1. Karya Tulis/Buku/Modul/Penulisan artikel online bidang pendidikan menggunakan media Blog:</label>
            <input type="text" class="form-control" id="ib1" name="ib1" value="<?php echo $d['ib1'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasib1'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinib1">Nilai Validasi :</label>
    <select name="apoinib1" id="apoinib1">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
    </select>

</form>
<label for="poinib1">Nilai Sistem:</label>
    <select name="poinib1" id="poinib1">
        <option><?php echo $row['poinib1']; ?></option>
    </select>
</form>

        <div class="form-group">
            <label for="ib2">2. E-modul/E-book sesuai mata pelajaran yang diampu atau keunggulan sekolah: </label>
            <input type="text" class="form-control" id="ib2" name="ib2" value="<?php echo $d['ib2'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasib2'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinib2">Nilai Validasi :</label>
    <select name="apoinib2" id="apoinib2">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>

</form>
<label for="poinib2">Nilai Sistem:</label>
    <select name="poinib2" id="poinib2">
        <option><?php echo $row['poinib2']; ?></option>
    </select>
</form>
        <div class="form-group">
            <label for="ib3">3. Pendekatan STEAM/STEM : </label>
            <input type="text" class="form-control" id="ib3" name="ib3" value="<?php echo $d['ib3'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasib3'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinib3">Nilai Validasi :</label>
    <select name="apoinib3" id="apoinib3">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
    </select>

</form>
<label for="poinib3">Nilai Sistem:</label>
    <select name="poinib3" id="poinib3">
        <option><?php echo $row['poinib3']; ?></option>
    </select>
</form>

        <div class="form-group">
            <label for="ib4">4. Penggunaan alat peraga: </label>
            <input type="text" class="form-control" id="ib4" name="ib4" value="<?php echo $d['ib4'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasib4'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinib4">Nilai Validasi :</label>
    <select name="apoinib4" id="apoinib4">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>

</form>
<label for="poinib4">Nilai Sistem:</label>
    <select name="poinib4" id="poinib4">
        <option><?php echo $row['poinib4']; ?></option>
    </select>
</form>
        <div class="form-group">
            <label for="ib5">5. Publikasi pembelajaran kreatif  melalui youtube / tik tok / X-twitter / IG / Facebook </label>
            <input type="text" class="form-control" id="ib5" name="ib5" value="<?php echo $d['ib5'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasib5'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinib5">Nilai Validasi :</label>
    <select name="apoinib5" id="apoinib5">
      
        <option>0</option>
        <option>1</option>
    </select>

</form>
<label for="poinib5">Nilai Sistem:</label>
    <select name="poinib5" id="poinib5">
        <option><?php echo $row['poinib5']; ?></option>
    </select>
</form>

        <div class="form-group">
            <label for="ib6">6.PTK (Penelitian Tindakan Kelas) / BP ( Best Practice ) </label>
            <input type="text" class="form-control" id="ib6" name="ib6" value="<?php echo $d['ib6'];?>" >
        </div>
        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasib6'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinib6">Nilai Validasi :</label>
    <select name="apoinib6" id="apoinib6">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>

</form>

<label for="poinib6">Nilai Sistem:</label>
    <select name="poinib6" id="poinib6">
        <option><?php echo $row['poinib6']; ?></option>
    </select>
</form>
<h3>C. Support Pilar</h3>
<div class="form-group">
<label for="ic1">1.Penguasaan Bahasa Asing  </label>
            <input type="text" class="form-control" id="ic1" name="ic1" value="<?php echo $d['ic1'];?>" >
        </div>
        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasic1'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinic1">Nilai Validasi :</label>
    <select name="apoinic1" id="apoinic1">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>

</form>

<label for="poinic1">Nilai Sistem:</label>
    <select name="poinic1" id="poinic1">
        <option><?php echo $row['poinic1']; ?></option>
    </select>
</form>

<div class="form-group">
<label>2. Kewirausahaan</label>
<label for="ic2">• Perencanaan ( proposal )</label>
            <input type="text" class="form-control" id="ic2" name="ic2" value="<?php echo $d['ic2'];?>" >
        </div>
        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasic2'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinic2">Nilai Validasi :</label>
    <select name="apoinic2" id="apoinic2">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
    </select>

</form>

<label for="poinic2">Nilai Sistem:</label>
    <select name="poinic2" id="poinic2">
        <option><?php echo $row['poinic2']; ?></option>
    </select>
</form>

<div class="form-group">
<label for="icb2">• Video presentasi siswa pembuatan produk / kegiatan perayaan</label>
            <input type="text" class="form-control" id="icb2" name="icb2" value="<?php echo $d['icb2'];?>" >
        </div>
        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasicb2'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinicb2">Nilai Validasi :</label>
    <select name="apoinicb2" id="apoinicb2">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
    </select>

</form>

<label for="poinicb2">Nilai Sistem:</label>
    <select name="poinicb2" id="poinicb2">
        <option><?php echo $row['poinicb2']; ?></option>
    </select>
</form>

<div class="form-group">
<label for="icc2">• Selling produk ( online / offline ) / pameran / perayaan</label>
            <input type="text" class="form-control" id="icc2" name="icc2" value="<?php echo $d['icc2'];?>" >
        </div>
        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasicc2'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinicc2">Nilai Validasi :</label>
    <select name="apoinicc2" id="apoinicc2">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
    </select>

</form>

<label for="poinicc2">Nilai Sistem:</label>
    <select name="poinicc2" id="poinicc2">
        <option><?php echo $row['poinicc2']; ?></option>
    </select>
</form>

<div class="form-group">
<label for="icd2">• Pelaporan kegiatan</label>
            <input type="text" class="form-control" id="icd2" name="icd2" value="<?php echo $d['icd2'];?>" >
        </div>
        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasicd2'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinicd2">Nilai Validasi :</label>
    <select name="apoinicd2" id="apoinicd2">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
    </select>

</form>

<label for="poinicd2">Nilai Sistem:</label>
    <select name="poinicd2" id="poinicd2">
        <option><?php echo $row['poinicd2']; ?></option>
    </select>
</form>

<h3>D. Mengikuti lomba sesuai kompetensinya</h3>
<div class="form-group">
<label for="id1">1.Guru mengikuti lomba sesuai kompetensinya</label>
            <input type="text" class="form-control" id="id1" name="id1" value="<?php echo $d['id1'];?>" >
        </div>
        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasid1', 'berkasid11', 'berkasid111'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinid1">Nilai Validasi :</label>
    <select name="apoinid1" id="apoinid1">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>

</form>

<label for="poinid1">Nilai Sistem:</label>
    <select name="poinid1" id="poinid1">
        <option><?php echo $row['poinid1']; ?></option>
    </select>
</form>

<h3>E.Keaktifan Mengikuti pelatihan di PMM</h3>
<div class="form-group">
<label for="ie1">1. Guru mengikuti pengembangan diri di PMM</label>
            <input type="text" class="form-control" id="ie1" name="ie1" value="<?php echo $d['ie1'];?>" >
        </div>
        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasie1','berkasie11','berkasie111'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinie1">Nilai Validasi :</label>
    <select name="apoinie1" id="apoinie1">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>

</form>

<label for="poinie1">Nilai Sistem:</label>
    <select name="poinie1" id="poinie1">
        <option><?php echo $row['poinie1']; ?></option>
    </select>
</form>

<h2>II. Pengembangan Siswa</h2>
    <h3>A. Kegiatan pembimbingan lomba internal</h3>
        <div class="form-group">
            <label for="iia1">1. Kegiatan lomba internal yang diupload dalam IG pribadi guru </label>
            <input type="text" class="form-control" id="iia1" name="iia1" value="<?php echo $d['iia1'];?>" >
        </div>
        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasiia1'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoiniia1">Nilai Validasi :</label>
    <select name="apoiniia1" id="apoiniia1">
      
        <option>0</option>
        <option>1</option>
    </select>

</form>
<label for="poiniia1">Nilai Sistem:</label>
    <select name="poiniia1" id="poiniia1">
        <option><?php echo $row['poiniia1']; ?></option>
    </select>
</form>

 <div class="form-group">
    <label>2. Pembimbing Lomba Internal (sesuai kompetensi guru)</label>
            <label for="iia2">• Pembimbing Peserta Lomba</label>
            <input type="text" class="form-control" id="iia2" name="iia2" value="<?php echo $d['iia2'];?>" >
        </div>
        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasiia2', 'berkasiia22', 'berkasiia222'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoiniia2">Nilai Validasi :</label>
    <select name="apoiniia2" id="apoiniia2">
        <option>0</option>
        <option>1</option>
    </select>

</form>
<label for="poiniia2">Nilai Sistem:</label>
    <select name="poiniia2" id="poiniia2">
        <option><?php echo $row['poiniia2']; ?></option>
    </select>
</form>

<div class="form-group">
            <label for="iia2">• Pembimbing Pemenang Lomba</label>
            <input type="text" class="form-control" id="iiab2" name="iiab2" value="<?php echo $d['iiab2'];?>" >
        </div>
        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasiiab2', 'berkasiiab22', 'berkasiiab222', 'berkasiiab2222'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoiniiab2">Nilai Validasi :</label>
    <select name="apoiniiab2" id="apoiniiab2">
        <option>0</option>
        <option>1</option>
        <option>2</option>
    </select>

</form>
<label for="poiniiab2">Nilai Sistem:</label>
    <select name="poiniiab2" id="poiniiab2">
        <option><?php echo $row['poiniiab2']; ?></option>
    </select>
</form>

        <h3>B. Kegiatan Eksternal</h3>
        <div class="form-group">
            <label for="iib1">1. Kegiatan / lomba eksternal upload IG pribadi guru :</label>
            <input type="text" class="form-control" id="iib1" name="iib1" value="<?php echo $d['iib1'];?>" >
        </div>
        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasiib1'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoiniib1">Nilai Validasi :</label>
    <select name="apoiniib1" id="apoiniib1">
      
        <option>0</option>
        <option>1</option>
    </select>

</form>
<label for="poiniib1">Nilai Sistem:</label>
    <select name="poiniib1" id="poiniib1">
        <option><?php echo $row['poiniib1']; ?></option>
    </select>
</form>

        <div class="form-group">
            <label for="iib2">2. Pembimbing tampilan/event :</label>
            <input type="text" class="form-control" id="iib2" name="iib2" value="<?php echo $d['iib2'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasiib2', 'berkasiib22'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoiniib2">Nilai Validasi :</label>
    <select name="apoiniib2" id="apoiniib2">
      
        <option>0</option>
        <option>1</option>
    </select>

</form>
<label for="poiniib2">Nilai Sistem:</label>
    <select name="poiniib2" id="poiniib2">
        <option><?php echo $row['poiniib2']; ?></option>
    </select>
</form>
        <div class="form-group">
        <label>3.Pembimbing Lomba</label>
                <label for="iib3">• Pembimbing Peserta Lomba</label>
            <input type="text" class="form-control" id="iib3" name="iib3" value="<?php echo $d['iib3'];?>" >
        </div>
        <?php 
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
$directory = 'uploads/';
$filesToShow = ['berkasiib3', 'berkasiib33', 'berkasiib333'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoiniib3">Nilai Validasi :</label>
    <select name="apoiniib3" id="apoiniib3">
      
        <option>0</option>
        <option>1</option>
    </select>

</form>
<label for="poiniib3">Nilai Sistem:</label>
    <select name="poiniib3" id="poiniib3">
        <option><?php echo $row['poiniib3']; ?></option>
    </select>
</form>

<div class="form-group">
            <label for="iiba3">• Pembimbing Pemenang Lomba</label>
            <input type="text" class="form-control" id="iiba3" name="iiba3" value="<?php echo $d['iiba3'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasiiba3', 'berkasiiba33', 'berkasiiba333','berkasiiba3333'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoiniiba3">Nilai Validasi :</label>
    <select name="apoiniiba3" id="apoiniiba3">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
    </select>

</form>
<label for="poiniiba3">Nilai Sistem:</label>
    <select name="poiniiba3" id="poiniiba3">
        <option><?php echo $row['poiniiba3']; ?></option>
    </select>
</form>

        <div class="form-group">
        <label>4.Pendampingan</label>
                <label for="iib4"> • Pendamping outingclass / prakerin/ fieldtrip</label>
            <input type="text" class="form-control" id="iib4" name="iib4" value="<?php echo $d['iib4'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasiib4'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoiniib4">Nilai Validasi :</label>
    <select name="apoiniib4" id="apoiniib4">
      
        <option>0</option>
        <option>1</option>
    </select>

</form>
<label for="poiniib4">Nilai Sistem:</label>
    <select name="poiniib4" id="poiniib4">
        <option><?php echo $row['poiniib4']; ?></option>
    </select>
</form>

<div class="form-group">
            <label for="iibb4"> • Pendamping tampilan/event/pameran PPD/lomba eksternal</label>
            <input type="text" class="form-control" id="iibb4" name="iibb4" value="<?php echo $d['iibb4'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasiibb4', 'berkasiibb44'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoiniibb4">Nilai Validasi :</label>
    <select name="apoiniibb4" id="apoiniibb4">
      
        <option>0</option>
        <option>1</option>
    </select>

</form>
<label for="poiniibb4">Nilai Sistem:</label>
    <select name="poiniibb4" id="poiniibb4">
        <option><?php echo $row['poiniibb4']; ?></option>
    </select>
</form>

<div class="form-group">
            <label for="iibc4"> • Pendamping home visit</label>
            <input type="text" class="form-control" id="iibc4" name="iibc4" value="<?php echo $d['iibc4'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasiibc4', 'berkasiibc44'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoiniibc4">Nilai Validasi :</label>
    <select name="apoiniibc4" id="apoiniibc4">
      
        <option>0</option>
        <option>1</option>
    </select>

</form>
<label for="poiniibc4">Nilai Sistem:</label>
    <select name="poiniibc4" id="poiniibc4">
        <option><?php echo $row['poiniibc4']; ?></option>
    </select>
</form>

        <h2>III. Pengembangan Teman Sejawat</h2>
        <h3>A. Pendampingan Teman Sejawat</h3>
        <div class="form-group">
            <label for="iiia1">1. Guru memberikan pendampingan kepada teman sejawat dengan durasi minimal 1 minggu untuk 2x pertemuan: </label>
            <input type="text" class="form-control" id="iiia1" name="iiia1" value="<?php echo $d['iiia1'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasiiia1', 'berkasiiia11', 'berkasiiia111'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoiniiia1">Nilai Validasi :</label>
    <select name="apoiniiia1" id="apoiniiia1">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
    </select>

</form>
<label for="poiniiia1">Nilai Sistem:</label>
    <select name="poiniiia1" id="poiniiia1">
        <option><?php echo $row['poiniiia1']; ?></option>
    </select>
</form>

        <h3>B. Sharing Internal</h3>
        <div class="form-group">
            <label for="iiib1">1. Sharing internal dilakukan oleh guru dalam sebuah forum pertemuan: </label>
            <input type="text" class="form-control" id="iiib1" name="iiib1" value="<?php echo $d['iiib1'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasiiib1', 'berkasiiib11', 'berkasiiib111','berkasiiib1111','berkasiiib11111'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoiniiib1">Nilai Validasi :</label>
    <select name="apoiniiib1" id="apoiniiib1">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
    </select>

</form>
<label for="poiniiib1">Nilai Sistem:</label>
    <select name="poiniiib1" id="poiniiib1">
        <option><?php echo $row['poiniiib1']; ?></option>
    </select>
</form>
        <h3>C. Partisipasi Pelatihan/kegiatan eksternal</h3>
        <div class="form-group">
            <label for="iiic1">1. Guru dapat berpartisipasi dalam pelatihan / kegiatan yang diselenggarakan oleh pihak eksternal / lintas jenjang: </label>
            <input type="text" class="form-control" id="iiic1" name="iiic1" value="<?php echo $d['iiic1'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasiiic1', 'berkasiiic11', 'berkasiiic111','berkasiiic1111','berkasiiic11111'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoiniiic1">Nilai Validasi :</label>
    <select name="apoiniiic1" id="apoiniiic1">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
    </select>

</form>
<label for="poiniiic1">Nilai Sistem:</label>
    <select name="poiniiic1" id="poiniiic1">
        <option><?php echo $row['poiniiic1']; ?></option>
    </select>
</form>
        <h2>IV. Peran serta di sekolah</h2>
        <h3>A. Kepanitiaan di kegiatan umum</h3>
        <div class="form-group">
            <label for="iva1">1. Guru dapat berperan serta dalam kepanitiaan di kegiatan umum. Durasi tidak lebih dari 3 bulan ( jangka pendek ). SK atau sertifikat ditandatangani oleh Manajemen: </label>
            <input type="text" class="form-control" id="iva1" name="iva1" value="<?php echo $d['iva1'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasiva1'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoiniva1">Nilai Validasi :</label>
    <select name="apoiniva1" id="apoiniva1">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
    </select>

</form>
<label for="poiniva1">Nilai Sistem:</label>
    <select name="poiniva1" id="poiniva1">
        <option><?php echo $row['poiniva1']; ?></option>
    </select>
</form>

        <h3>B. Kepanitiaan PPDB</h3>
        <div class="form-group">
            <label for="ivb1">1.Guru dapat terlibat dalam kepanitiaan PPDB di jenjang masing2. SK diberikan oleh pimpinan jenjang ybs: </label>
            <input type="text" class="form-control" id="ivb1" name="ivb1" value="<?php echo $d['ivb1'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasivb1'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinivb1">Nilai Validasi :</label>
    <select name="apoinivb1" id="apoinivb1">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>

</form>
<label for="poinivb1">Nilai Sistem:</label>
    <select name="poinivb1" id="poinivb1">
        <option><?php echo $row['poinivb1']; ?></option>
    </select>
</form>
        <h3>C. Tim Pengembangan Jenjang</h3>
        <div class="form-group">
            <label for="ivc1">1.Guru dapat berperan serta dalam pengembangan di jenjangnya masing2. Dalam bentuk kegiatan maupun penugasan dalam jabatan tertentu : </label>
            <input type="text" class="form-control" id="ivc1" name="ivc1" value="<?php echo $d['ivc1'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasivc1'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinivc1">Nilai Validasi :</label>
    <select name="apoinivc1" id="apoinivc1">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
    </select>

</form>
<label for="poinivc1">Nilai Sistem:</label>
    <select name="poinivc1" id="poinivc1">
        <option><?php echo $row['poinivc1']; ?></option>
    </select>
</form>

        <h3>D. Tim Pengembangan institusi</h3>
        <div class="form-group">
            <label for="ivd1">1.Guru dapat berperan dalam pengembangan institusi Nusaputera secara luas, dengan durasi penugasan minimal 1 smester. Surat tugas / SK ditandatangani oleh Manajemen : </label>
            <input type="text" class="form-control" id="ivd1" name="ivd1" value="<?php echo $d['ivd1'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasivd1'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinivd1">Nilai Validasi :</label>
    <select name="apoinivd1" id="apoinivd1">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>

</form>
<label for="poinivd1">Nilai Sistem:</label>
    <select name="poinivd1" id="poinivd1">
        <option><?php echo $row['poinivd1']; ?></option>
    </select>
</form>
        <h3>E. Supporting unggulan sekolah</h3>
        <div class="form-group">
        <label> 1. Guru dapat dilibatkan sebagai mitra dalam melayani transaksi yang tersedia, maupun sebagai pengguna aplikasi dengan berpartisipasi membeli produk yang ditawarkan.</label>
        <label for="ive1">• Memiliki Aplikasi My Nusaputera</label>
            <input type="text" class="form-control" id="ive1" name="ive1" value="<?php echo $d['ive1'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasive1'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinive1">Nilai Validasi :</label>
    <select name="apoinive1" id="apoinive1">
      
        <option>0</option>
        <option>1</option>
    </select>

</form>
<label for="poinive1">Nilai Sistem:</label>
    <select name="poinive1" id="poinive1">
        <option><?php echo $row['poinive1']; ?></option>
    </select>
</form>

<div class="form-group">
<label for="ivea1">• Sebagai Mitra</label>
            <input type="text" class="form-control" id="ivea1" name="ivea1" value="<?php echo $d['ivea1'];?>" >
        </div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasivea1'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinivea1">Nilai Validasi :</label>
    <select name="apoinivea1" id="apoinivea1">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
    </select>

</form>
<label for="poinivea1">Nilai Sistem:</label>
    <select name="poinivea1" id="poinivea1">
        <option><?php echo $row['poinivea1']; ?></option>
    </select>
</form>

        <div class="form-group">
            <label for="ive2">2. Sebagai partisipan dalam pembelian produk di My Nusaputera / Mitra  selama satu tahun : </label>
            <input type="text" class="form-control" id="ive2" name="ive2" value="<?php echo $d['ive2'];?>" >
        </div>
        <div>
        <?php
// Ambil data dari database
$sql = "SELECT * FROM tabel_p_pendidikan2 WHERE id_penilaian='$id_penilaian'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

$directory = 'uploads/';
$filesToShow = ['berkasive2'];

foreach ($filesToShow as $file) {
    $filePath = $directory . $row[$file];

    // Periksa apakah file ada sebelum menangani
    if (file_exists($filePath)) {
        // Periksa tipe file
        $fileType = mime_content_type($filePath);

        // Menampilkan gambar jika itu adalah gambar
        if (strpos($fileType, 'image') !== false) {
            echo "<img src='$filePath' alt='$file'><br>";
        }
        // Memberikan tautan unduh jika itu adalah PDF
        elseif (strpos($fileType, 'application/pdf') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (PDF)</a><br>";
        }
        // Memberikan tautan unduh jika itu adalah DOC atau DOCX
        elseif (strpos($fileType, 'application/msword') !== false || strpos($fileType, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') !== false) {
            echo "<a href='$filePath' download='$file'>Unduh $file (Word)</a><br>";
        } else {
            echo "Tipe file tidak didukung.<br>";
        }
    } else {
        echo "File $file tidak ditemukan.<br>";
    }
}
?>

    <label for="apoinive2">Nilai Validasi :</label>
    <select name="apoinive2" id="apoinive2">
      
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>

</form>
<label for="poinive2">Nilai Sistem:</label>
    <select name="poinive2" id="poinive2">
        <option><?php echo $row['poinive2']; ?></option>
    </select>
</form>
<br>
<br>
        
        <div>
            <label for="validasi"><b>Beri validasi:</b></label>
            <select name="validasi" id="validasi">
                <option>✅</option>
                <option>❌</option>
            </select>
        </div>

        <div class="form-group">
                    <label for="tahun_penilaian">Tahun penilaian:</label>
                    <input type="number" id="tahun_penilaian" name="tahun_penilaian" min="2023" max="2030" value="<?php echo $d['tahun_penilaian']; ?>" >
                </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>
    <?php
    }
    ?>
</body>
</html>