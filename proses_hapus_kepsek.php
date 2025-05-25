<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tabel_karyawan where id='$id'");
mysqli_query($koneksi,"delete from tabel_jabatan where id='$id'");
mysqli_query($koneksi,"delete from tabel_p_sdm where id='$id'");
mysqli_query($koneksi,"delete from tabel_p_kepsek where id='$id'");
mysqli_query($koneksi,"delete from tabel_p_pendidikan2 where id='$id'");
mysqli_query($koneksi,"delete from tabel_keterangan_karyawan where id='$id'");
// mengalihkan halaman kembali ke index.php
header("location:page_edit_kepsek.php");
 
?>