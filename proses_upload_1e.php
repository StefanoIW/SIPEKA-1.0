<?php
include "koneksi.php";
session_start();

$id = $_POST['id'] ?? null;
$nama = $_POST['nama'] ?? null;

$ie1 = $_POST['ie1'] ?? null;

$poin_ie1 = 0;
if($ie1 == "Mengikuti PMM mandiri sampai dengan praktik baik"){
   $poin_ie1 = 1;
}elseif($ie1 == "Mengikuti PMM / Komunitas belajar / Guru Penggerak Bersertifikat dari Kementrian Pendidikan"){
   $poin_ie1 = 3;
}
$uploads = [
    'berkasie1', 'berkasie11', 'berkasie111'
];

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
$query = "UPDATE tabel_p_pendidikan2 SET 
    nama = '$nama',
    ie1 = '$ie1', poinie1 = $poin_ie1, berkasie1 = '{$uploaded_files['berkasie1']}', berkasie11 = '{$uploaded_files['berkasie11']}', berkasie111 = '{$uploaded_files['berkasie111']}'
    WHERE id = '$id' and tahun_penilaian = '$tahun_penilaian' ";

if (mysqli_query($koneksi, $query)) {
    header("Location: page_tombolupload_guru.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>