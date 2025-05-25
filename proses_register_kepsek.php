<?php 
session_start();
include 'koneksi.php';

// Ambil data dari form dan hindari SQL Injection
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$tgl_lahir = mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']);
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = md5(mysqli_real_escape_string($koneksi, $_POST['password']));
$jabatan = mysqli_real_escape_string($koneksi, $_POST['jabatan']);
$jenjang = mysqli_real_escape_string($koneksi, $_POST['jenjang']);
$tahunpenilaian = mysqli_real_escape_string($koneksi, $_POST['tahunpenilaian']);
$matapelajaran = mysqli_real_escape_string($koneksi, $_POST['matapelajaran']);

$nama_file = "";
if (!empty($_FILES['berkas']['name'])) {
    $nama_file = $_FILES['berkas']['name'];
    $tmp_file = $_FILES['berkas']['tmp_name'];
    $file_ext = strtolower(pathinfo($nama_file, PATHINFO_EXTENSION));
    $allowed_ext = ['jpg', 'jpeg', 'png', 'pdf'];

    if (!in_array($file_ext, $allowed_ext)) {
        die("Format file tidak diizinkan.");
    }

    $nama_file = time() . "_" . $nama_file;
    $lokasi_upload = "uploads/" . $nama_file;

    if (!move_uploaded_file($tmp_file, $lokasi_upload)) {
        die("Upload file gagal.");
    }
}

// Insert ke tabel_jabatan
$query1 = "INSERT INTO tabel_jabatan (nama, tgl_lahir, username, password, jabatan, jenjang, angkatan) 
           VALUES ('$nama', '$tgl_lahir', '$username', '$password', '$jabatan', '$jenjang', '$tahunpenilaian')";
mysqli_query($koneksi, $query1) or die("Query gagal: " . mysqli_error($koneksi));

// Ambil ID terbaru
$sql = "SELECT id FROM tabel_jabatan WHERE username = '$username' LIMIT 1";
$query = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($query);
if (!$row) {
    die("Error: Username tidak ditemukan di tabel_jabatan");
}
$id = $row['id'];

// Insert ke tabel_karyawan
$query2 = "INSERT INTO tabel_karyawan (id, nama, jenjang, mata_pelajaran, jabatan, angkatan, foto_profil) 
           VALUES ('$id', '$nama', '$jenjang', '$matapelajaran', '$jabatan', '$tahunpenilaian', '$nama_file')";
mysqli_query($koneksi, $query2) or die("Query gagal: " . mysqli_error($koneksi));

// Redirect
header("location:page_register_admin.php");
exit;
?>
