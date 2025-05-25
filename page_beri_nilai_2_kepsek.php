<?php 
include "koneksi.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>berinilai kepsek2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
       html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    background: url('bgnusput.jpg') no-repeat center center fixed;
    background-size: 100% 100%;
    background-position: center center;
    font-family: Arial, sans-serif;
}

        .navbar-kepsek {
    background-color: #3498db;
    border: 1px solid #2978a0;
    padding: 10px 0;
    text-align: center;
}

    .container {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: 20px;
    }

    .navbar-kepsek a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .navbar-kepsek a:hover {
        background-color: #ddd;
        color: black;
    }

    h1 {
    font-size: 40px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    text-align: center;
}

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: normal;
    }

    select,
    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-top: 5px;
    }

    button {
        background-color: #349DB3;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }

    button:hover {
        background-color: #267e91;
    }

    h4 {
        margin-top: 20px;
    }

    .container {
        margin: 20px auto;
        max-width: 600px;      
    }

    #catatan_kepsek {
        height: 100px;
    }
</style>
</head>

<body>
<div class="navbar-kepsek" id="navbar-guru">
        <a href="page_kepsek.php">Home</a>
        <a href="page_profil_kepsek.php">Profil</a>
        <a href="page_beri_nilai_kepsek.php">Nilai Guru</a>
        <a href="page_laporan_kinerja_guru_kepsek.php">Laporan Kinerja Guru</a>
        <a href="page_jenjang2_kepsek.php">Jenjang</a>
        <a href="page_report_kepsek.php">Report</a>
        <a href="logout.php">Logout</a>
    </div>

<?php
$id = $_GET['id'];
$id_penilaian = $_GET['id_penilaian'];
$data = mysqli_query($koneksi,"select * from tabel_p_kepsek where id='$id' and id_penilaian = '$id_penilaian'");
while($d = mysqli_fetch_array($data))
{
      // Query untuk mendapatkan jenjang
    $query_jenjang = mysqli_query($koneksi, "SELECT jenjang FROM tabel_karyawan WHERE id='$id'");
    // Periksa apakah query berhasil dan hasilnya valid
    if ($query_jenjang && mysqli_num_rows($query_jenjang) > 0) {
        // Ambil data jenjang
        $data_jenjang = mysqli_fetch_assoc($query_jenjang);
        // Pastikan data jenjang tidak null sebelum mengaksesnya
        $jenjang = isset($data_jenjang['jenjang']) ? $data_jenjang['jenjang'] : '';
    } else {
        $jenjang = 'Data jenjang tidak ditemukan';
    }
?>

<script>
  // Fungsi untuk menyimpan data ke dalam variabel saat input berubah
  function simpanData() {
    var id = "<?php echo $d['id']; ?>"; // Mengambil nilai ID dari PHP
    var ka1 = document.getElementById("ka1").value;
    var ka2 = document.getElementById("ka2").value;

    // Simpan data ke dalam variabel local storage dengan kunci yang mengandung ID guru
    localStorage.setItem("ka1_" + id, ka1);
    localStorage.setItem("ka2_" + id, ka2);
  }

  // Fungsi untuk memuat kembali data dari variabel saat halaman dimuat
  window.onload = function() {
    var id = "<?php echo $d['id']; ?>"; // Mengambil nilai ID dari PHP
    var ka1 = localStorage.getItem("ka1_" + id);
    var ka2 = localStorage.getItem("ka2_" + id);

    if (ka1) {
      document.getElementById("ka1").value = ka1;
    }
    if (ka2) {
      document.getElementById("ka2").value = ka2;
    }
  }
</script>


<div class="container">
    <h1>Nilai Kepala Sekolah</h1>

    <form method="post" action="proses_nilai_kepsek.php">
        <div class="form-group">
            <label for="id">ID Guru:</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $d['id'];?>" readonly>
      </div> 
        <div class="form-group">
            <input type="text" class="form-control" id="id_penilaian" name="id_penilaian" value="<?php echo $d['id_penilaian'];?>" readonly style="display: none;">
      </div>

        <div class="form-group">
            <label for="nama">Nama Guru:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $d['Nama'];?>" readonly>
      </div> 
      <div class="form-group">
            <label for="jenjang">Jenjang:</label>
            <input type="text" class="form-control" id="jenjang" name="jenjang" value="<?php echo $data_jenjang['jenjang']; ?>" readonly>
      </div>
        <div class="form-group">
                    <label for="tahun_penilaian">Tahun penilaian:</label>
                    <input type="number" id="tahun_penilaian" name="tahun_penilaian" min="2023" max="2030" value="<?php echo $d['tahun_penilaian']; ?>" >
                </div>

        <h2>Penilaian Kompetensi Profesional Dan Pedagogik</h2>
<h4>A. Administrasi Perencanaan Pembelajaran</h4>

<div class="form-group">
      <label for="ka1">1. Silabus:</label>
      <select class="form-control" id="ka1" name="ka1" oninput="simpanData()">
        <option >Tidak ada bukti/Tidak Terpenuhi</option>
        <option >Terpenuhi sebagian (<=85%) </option>
        <option >Terpenuhi seluruhnya</option>
      </select>
    </div>

<div class="form-group">
      <label for="ka2">2. Program Tahunan:</label>
      <select class="form-control" id="ka2" name="ka2" oninput="simpanData()">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option>Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="ka3">3. Program Semester:</label>
      <select class="form-control" id="ka3" name="ka3">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="ka4">4. Rencana Pelaksanaan Pembelajaran</label>
      <select class="form-control" id="ka4" name="ka4">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="ka5">5. Penetapan Kriteria Ketuntasan Minimal Mata Pelajjaran</label>
      <select class="form-control" id="ka5" name="ka5">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>>
      </select>
</div>

<div class="form-group">
      <label for="ka6">6. Bank Soal</label>
      <select class="form-control" id="ka6" name="ka6">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<h4>B. Pelaksanaan Pembelajaran</h4>

<h4>Kegiatan Pendahuluan</h4>

<div class="form-group">
      <label for="kb1">1. Memberi salam dalam bahasa inggris/mandarin</label>
      <select class="form-control" id="kb1" name="kb1">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb2">2. Mengabsen kehadiran dalam bahasa inggris/mandarin</label>
      <select class="form-control" id="kb2" name="kb2">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb3">3. Mempersiapkan siswa</label>
      <select class="form-control" id="kb3" name="kb3">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb4">4. Menyampaikan kompetensi dasar/tujuan pembelajaran</label>
      <select class="form-control" id="kb4" name="kb4">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb5">5. Memperhatikan kebersihan kelas</label>
      <select class="form-control" id="kb5" name="kb5">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb6">6. Melakukan apersepsi </label>
      <select class="form-control" id="kb6" name="kb6">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<h4>Kegiatan inti pembelajaran</h4>

<div class="form-group">
      <label for="kb7">7. Menguasai materi</label>
      <select class="form-control" id="kb7" name="kb7">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb8">8. Kontekstual</label>
      <select class="form-control" id="kb8" name="kb8">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb9">9. Menyampaikan materi dengan jelas</label>
      <select class="form-control" id="kb9" name="kb9">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb10">10. Melaksanakan pembelajaran sesuai dengan kompetensi/tujuan</label>
      <select class="form-control" id="kb10" name="kb10">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb11">11. Menguasai kelas</label>
      <select class="form-control" id="kb11" name="kb11">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb12">12. Melaksanakan pembelajaran sesuai alokasi waktu</label>
      <select class="form-control" id="kb12" name="kb12">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb13">13. Tercipta interaksi guru dan siswa</label>
      <select class="form-control" id="kb13" name="kb13">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb14">14. Menggunakan media yang sesuai</label>
      <select class="form-control" id="kb14" name="kb14">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb15">15. Memanfaatkan berbagai sumber belajar</label>
      <select class="form-control" id="kb15" name="kb15">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb16">16. Memahami IT (media ajar, sumber belajar)</label>
      <select class="form-control" id="kb16" name="kb16">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb17">17. Merespon positif pertanyaan siswa</label>
      <select class="form-control" id="kb17" name="kb17">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb18">18. Menyisipkan pesan moral</label>
      <select class="form-control" id="kb18" name="kb18">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb19">19. Menggunakan bahasa tulis secara jelas, baik, dan benar</label>
      <select class="form-control" id="kb19" name="kb19">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb20">20. Menggunakan bahasa lisan secara jelas, baik, dan benar</label>
      <select class="form-control" id="kb20" name="kb20">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb21">21. Melakukan refleksi</label>
      <select class="form-control" id="kb21" name="kb21">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb22">22. Membuat rangkuman dengan melibatkan siswa</label>
      <select class="form-control" id="kb22" name="kb22">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kb23">23. Melaksanakan tindak lanjut (dengan menggunakan IT poin 2)</label>
      <select class="form-control" id="kb23" name="kb23">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>


<h4>C. Evaluasi dan Tindak Lanjut<h4>

<div class="form-group">
      <label for="kc1">1. Penyusunan soal menggunakan kisi-kisi</label>
      <select class="form-control" id="kc1" name="kc1">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kc2">2. Soal Sesuai Indikator</label>
      <select class="form-control" id="kc2" name="kc2">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kc3">3. Butir soal ditulis menggunakan kaedah penulisan soal yang benar</label>
      <select class="form-control" id="kc3" name="kc3">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kc4">4. Penilaian dilakukan minimal 3 kali per semester</label>
      <select class="form-control" id="kc4" name="kc4">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kc5">5. Tugas dan hasil evaluasi dikoreksi dan dikembalikan kepada siswa </label>
      <select class="form-control" id="kc5" name="kc5">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kc6">6. Penilaian dilakukan dengan tertib</label>
      <select class="form-control" id="kc6" name="kc6">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kc7">7. Melakukan analisis pencapaian ketuntasan belajar </label>
      <select class="form-control" id="kc7" name="kc7">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kc8">8. Melakukan remidi untuk perbaikan nilai</label>
      <select class="form-control" id="kc8" name="kc8">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kc9">9. Melakukan pengayakan untuk meningkatkan kompetensi siswa</label>
      <select class="form-control" id="kc9" name="kc9">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<h2>Penilaian Kompetensi Kepribadian</h2>
<div> Bertindak sesuai dengan Norma Agama, Hukum, Sosial dan Kebudayaan </div>
<br>
<div class="form-group">
      <label for="kd1">1. Guru menghargai dan mempromosikan prinsip-prinsip
Pancasila sebagai dasar ideologi dan etika bagi semua warga Indonesia.
</label>
      <select class="form-control" id="kd1" name="kd1">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kd2">2. Guru mengembangkan kerjasama dan  membina
kebersamaan dengan teman sejawat tanpa memperhatikan perbedaan yang ada
</label>
      <select class="form-control" id="kd2" name="kd2">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kd3">3. Guru saling menghormati dan menghargai teman
sejawat sesuai dengan kondisi dan keberadaan masing- masing.
</label>
      <select class="form-control" id="kd3" name="kd3">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kd4">4. Guru memiliki rasa persatuan dan kesatuan sebagai
bangsa Indonesia.
</label>
      <select class="form-control" id="kd4" name="kd4">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kd5">5. Guru mempunyai pandangan yang luas tentang keberagaman bangsa Indonesia (misalnya: budaya, suku, agama).</label>
      <select class="form-control" id="kd5" name="kd5">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

    <h4>Menunjukkan Pribadi yang teladan dan dewasa</h4>
    
<div class="form-group">
      <label for="ke1">1. Guru bertingkah laku santun dalam berbicara,
berpenampilan sopan, terhadap semua peserta didik, orang tua, dan teman sejawat.
</label>
      <select class="form-control" id="ke1" name="ke1">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="ke2">2. Guru peduli dengan kebersihan diri dan lingkungan</label>
      <select class="form-control" id="ke2" name="ke2">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>


<div class="form-group">
      <label for="ke3">3. Menjunjung tinggi kejujuran</label>
      <select class="form-control" id="ke3" name="ke3">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="ke4">4. Guru bersikap dewasa dalam menerima masukan
dari peserta didik</label>
      <select class="form-control" id="ke4" name="ke4">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="ke5">5. Guru berperilaku baik untuk mencitrakan nama
baik sekolah</label>
      <select class="form-control" id="ke5" name="ke5">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<h4>Etos Kerja, tanggung jawab yang tinggi dan rasa bangga menjadi guru</h4>

<div class="form-group">
      <label for="kf1">1. Guru mengawali dan mengakhiri pembelajaran
     dengan tepat waktu. </label>
      <select class="form-control" id="kf1" name="kf1">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kf2">2. Jika guru harus meninggalkan kelas, guru mengaktifkan siswa dengan melakukan hal-hal produktif terkait dengan mata pelajaran, dan meminta guru piket atau guru lain untuk
    mengawasi kelas.</label>
      <select class="form-control" id="kf2" name="kf2">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<br>
<div class="form-group">
      <label for="kf3">3. Guru memenuhi jam mengajar dan dapat melakukan semua kegiatan  lain di luar jam mengajar berdasarkan ijin dan persetujuan pengelola sekolah. </label>
      <select class="form-control" id="kf3" name="kf3">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kf4">4. Guru menyelesaikan semua tugas administratif dan
non-pembelajaran dengan tepat waktu sesuai standar yang ditetapkan.</label>
      <select class="form-control" id="kf4" name="kf4">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kf5">5. Guru merasa bangga dengan profesinya.</label>
      <select class="form-control" id="kf5" name="kf5">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>
<h2> Penilaian Kopetensi Sosial </h2>
<h4>Bersikap inklusif, bertindak objektif, serta tidak diskriminatif</h4>

<div class="form-group">
      <label for="kg1">1. Guru memperlakukan semua peserta didik secara adil,
memberikan perhatian dan bantuan sesuai kebutuhan masing-masing, tanpa memperdulikan personal.	faktopersonal</label>
      <select class="form-control" id="kg1" name="kg1">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kg2">2. Guru menjaga hubungan baik dan peduli dengan
teman sejawat (bersifat inklusif), serta berkontribusi positif terhadap semua diskusi formal dan informal
terkait dengan pekerjaannya </label>
      <select class="form-control" id="kg2" name="kg2">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kg3">3. Guru sering berinteraksi dengan peserta didik dan
tidak membatasi perhatiannya hanya pada kelompok tertentu (misalnya: peserta didik yang pandai, kaya, berasal dari daerah yang sama dengan guru) </label>
      <select class="form-control" id="kg3" name="kg3">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<h4>Komunikasi dengan sesama guru, tenaga pendidik, orang tua peserta didik dan masyarakat</h4>

<div class="form-group">
      <label for="kh1">1. Guru  menyampaikan  informasi  tentang  kemajuan,
kesulitan, dan potensi peserta didik kepada orang tuanya, baik dalam pertemuan formal maupun tidak formal antara guru dan orang tua, teman sejawat, dan dapat menunjukkan buktinya
 </label>
      <select class="form-control" id="kh1" name="kh1">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="kh2">2. Guru  memperhatikan  sekolah  sebagai  bagian  dari
masyarakat, berkomunikasi dengan masyarakat sekitar, serta berperan dalam kegiatan sosial di masyarakat</label>
      <select class="form-control" id="kh2" name="kh2">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<h2>Penilaian loyalitas</h2>

<div class="form-group">
      <label for="ki1">1. Bersedia meluangkan waktu untuk kepentingan sekolah di luar jam
    Kerja
</label>
      <select class="form-control" id="ki1" name="ki1">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>

<div class="form-group">
      <label for="ki2">2. Menjaga rahasia internal</label>
      <select class="form-control" id="ki2" name="ki2">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>
<div class="form-group">
      <label for="ki3">3. Menyampaikan hal positif tentang sekolah</label>
      <select class="form-control" id="ki3" name="ki3">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>
<div class="form-group">
      <label for="ki4">4. Taat peraturan tanpa diawasi</label>
      <select class="form-control" id="ki4" name="ki4">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>
<div class="form-group">
      <label for="ki5">5. Setia Pada NKRI</label>
      <select class="form-control" id="ki5" name="ki5">
        <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>
<div class="form-group">
      <label for="ki6">6. Berpartisipasi aktif dalam kegiatan sekolah</label>
      <select class="form-control" id="ki6" name="ki6">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>
<div class="form-group">
      <label for="ki7">7. Taat pada pimpinan</label>
      <select class="form-control" id="ki7" name="ki7">
     <option >Tidak ada bukti/Tidak Terpenuhi</option>
       <option >Terpenuhi sebagian (<=85%) </option>
         <option >Terpenuhi seluruhnya</option>
      </select>
</div>


<div class="form-group">
            <label for="catatan_kepsek">Catatan:</label>
            <input type="text" class="form-control" id="catatan_kepsek" name="catatan_kepsek">
        </div>

       

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>


<?php
}
?>

</body>
</html>