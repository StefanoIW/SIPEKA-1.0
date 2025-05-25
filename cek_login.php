<?php
//ambil koneksi dan sesion
ini_set('session.gc_maxlifetime', 86400);
ini_set('session.cookie_lifetime', 86400);
session_start();
include "koneksi.php";

//nangkap data dari form di index.php
$username = $_POST['username'];
$password = $_POST['password'];

$password_encrypt = md5($password);
$login = mysqli_query($koneksi, "SELECT * from tabel_jabatan where username='$username' and password = '$password_encrypt'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_array($login);

    // cek jika user login sebagai pendidikan
    if ($data['jabatan'] == "pendidikan") {

        // buat session login dan username
        $_SESSION['id'] = $data['id']; // Assuming 'id' is the column name for the user ID
        $_SESSION['username'] = $username;
        $_SESSION['jabatan'] = "pendidikan";
        // alihkan ke halaman dashboard admin
        header("location:page_pendidikan.php");

    // cek jika user login sebagai guru
    } else if ($data['jabatan'] == "guru") {
        // buat session login dan username
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $username;
        $_SESSION['jabatan'] = "guru";
        // alihkan ke halaman dashboard guru
        header("location:page_guru.php");

    // cek jika user login sebagai sdm
    } else if ($data['jabatan'] == "sdm") {
        // buat session login dan username
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $username;
        $_SESSION['jabatan'] = "sdm";
        // alihkan ke halaman dashboard sdm
        header("location:page_sdm.php");

    // cek jika user login sebagai kepsek
    } else if ($data['jabatan'] == "kepsek") {
        // buat session login dan username
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $username;
        $_SESSION['jabatan'] = "kepsek";
        // alihkan ke halaman dashboard kepsek
        header("location:page_kepsek.php");

    // cek jika user login sebagai admin
    } else if ($data['jabatan'] == "admin") {
        // buat session login dan username
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $username;
        $_SESSION['jabatan'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:page_admin.php");

    } else {
        // alihkan ke halaman login kembali
        header("location:index.php");
    }
} else {
    header("location:index.php");
}
?>