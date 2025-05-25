<?php
session_start();
include "koneksi.php";

$nama = $_POST['nama'];
$mata_pelajaran = $_POST['mata_pelajaran'];
$jabatan = $_POST['jabatan'];
$jenjang = $_POST['jenjang'];
$angkatan = $_POST['angkatan'];
$username = $_SESSION['username'];
$password = md5($_POST['password']);

$update_query = "UPDATE tabel_jabatan j 
                JOIN tabel_karyawan k ON j.id = k.id 
                SET j.nama='$nama', j.jabatan='$jabatan', j.jenjang='$jenjang', k.mata_pelajaran='$mata_pelajaran', j.angkatan='$angkatan',
                k.nama='$nama', k.jenjang='$jenjang', k.foto_profil='$nama_file' , j.password='$password'
                WHERE j.username='$username'";

mysqli_query($koneksi, $update_query);
header("location:page_profil_guru.php");
?>