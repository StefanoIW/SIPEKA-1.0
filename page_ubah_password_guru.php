<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form page_ubah_peg_kepsek.php
$id = $_POST['id'];
$nama = $_POST['nama'];


$username = $_POST['username'];
$password = md5($_POST['password']);

// menginput data ke database
mysqli_query($koneksi,"UPDATE tabel_jabatan SET nama = '$nama', username = '$username', password = '$password', jabatan = '$jabatan',jenjang = '$jenjang', angkatan = '$tahunpenilaian' WHERE id = $id");
mysqli_query($koneksi,"UPDATE tabel_karyawan SET nama = '$nama', angkatan = '$tahunpenilaian', jenjang = '$jenjang', mata_pelajaran = '$matapelajaran', foto_profil='$nama_file' WHERE id = $id");

// mengalihkan halaman kembali ke tambahpegawaisdm.php
header("location:page_edit_admin.php");
 
?>