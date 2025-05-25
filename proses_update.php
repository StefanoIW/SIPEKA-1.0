<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form page_ubah_peg_kepsek.php
$id = $_POST['id'];
$nama = $_POST['nama'];


$username = $_POST['username'];
$password = md5($_POST['password']);
$jabatan = $_POST['jabatan'];
$tahunpenilaian = $_POST['tahunpenilaian'];
$matapelajaran = $_POST['matapelajaran'];
$jenjang = $_POST['jenjang'];

if ($_FILES['berkas']['name']) {
    $nama_file = $_FILES['berkas']['name'];
    $tmp_file = $_FILES['berkas']['tmp_name'];
    $lokasi_upload = "uploads/" . $nama_file;
 
    // Pindahkan file ke folder tujuan
    if (move_uploaded_file($tmp_file, $lokasi_upload)) {
        // File berhasil diupload
    } else {
        // File gagal diupload
        echo "Upload file gagal.";
        exit;
    }
 } else {
    $nama_file = ""; // Jika tidak ada file yang diupload, set nama file menjadi kosong
 }
 
// menginput data ke database
mysqli_query($koneksi,"UPDATE tabel_jabatan SET nama = '$nama', username = '$username', password = '$password', jabatan = '$jabatan',jenjang = '$jenjang', angkatan = '$tahunpenilaian' WHERE id = $id");
mysqli_query($koneksi,"UPDATE tabel_karyawan SET nama = '$nama', angkatan = '$tahunpenilaian', jenjang = '$jenjang', mata_pelajaran = '$matapelajaran', foto_profil='$nama_file' WHERE id = $id");

// mengalihkan halaman kembali ke tambahpegawaisdm.php
header("location:page_edit_admin.php");
 
?>