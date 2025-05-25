<?php
include "koneksi.php";
session_start();

$id = $_POST['id'];
$nama = $_POST['nama'];
$ive1 = $_POST['ive1'];
$ivea1 = $_POST['ivea1'];
$ive2 = $_POST['ive2'];

$poin_ive1 = ($ive1 == "Download aplikasi My Nusaputera") ? 1 : 0;
$poin_ivea1 = ($ivea1 == "Sebagai mitra jenjang masing-masing") ? 2 : 0;
$poin_ive2 = ($ive2 == "6 sampai 12 transaksi") ? 1 : (($ive2 == "13 sampai 24 transaksi") ? 2 : (($ive2 == "Diatas 24 transaksi") ? 3 : 0));

$uploads = ['berkasive1', 'berkasive11', 'berkasive111', 'berkasivea1', 'berkasive2', 'berkasive22', 'berkasive222'];

$uploaded_files = [];
foreach ($uploads as $key) {
    if (isset($_FILES[$key]['name']) && $_FILES[$key]['name']) {
        $nama_file = $_FILES[$key]['name'];
        $tmp_file = $_FILES[$key]['tmp_name'];
        $nama_filefull = date("YmdHis") . $id . "_" . $nama_file;
        $lokasi_upload = "uploads/" . $nama_filefull ;

        if (move_uploaded_file($tmp_file, $lokasi_upload)) {
            $uploaded_files[$key] = $nama_filefull;
        } else {
            echo "Upload file gagal.";
            exit;
        }
    } else {
        $uploaded_files[$key] = "";
    }
}

$tahun_penilaian = $_POST['tahun_penilaian'];
// Remove the extra comma before the WHERE clause
$query = "UPDATE tabel_p_pendidikan2 SET 
    ive1 = '$ive1', poinive1 = $poin_ive1, berkasive1 = '{$uploaded_files['berkasive1']}',
    berkasive11 = '{$uploaded_files['berkasive11']}', berkasive111 = '{$uploaded_files['berkasive111']}',
    ivea1 = '$ivea1', poinivea1 = $poin_ivea1, berkasivea1 = '{$uploaded_files['berkasivea1']}',
    ive2 = '$ive2', poinive2 = $poin_ive2, berkasive2 = '{$uploaded_files['berkasive2']}',
    berkasive22 = '{$uploaded_files['berkasive22']}', berkasive222 = '{$uploaded_files['berkasive222']}'
    WHERE id = '$id' and tahun_penilaian = '$tahun_penilaian' ";

if (mysqli_query($koneksi, $query)) {
    header("Location: page_tombolupload_guru.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>
