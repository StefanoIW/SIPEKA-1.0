<?php
include "koneksi.php";
session_start();

$id = $_POST['id'] ?? null;
$nama = $_POST['nama'] ?? null;
$iiib1 = $_POST['iiib1'] ?? null;

$poin_iiib1 = 0;
if ($iiib1 == "Moderator/Host") {
    $poin_iiib1 = 1;
} elseif ($iiib1 == "Narasumber") {
    $poin_iiib1 = 2;
}

$uploads = [ 'berkasiiib1', 'berkasiiib11', 'berkasiiib111', 'berkasiiib1111', 'berkasiiib11111'];

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
    iiib1 = '$iiib1', poiniiib1 = $poin_iiib1, berkasiiib1 = '{$uploaded_files['berkasiiib1']}',
    berkasiiib11 = '{$uploaded_files['berkasiiib11']}', berkasiiib111 = '{$uploaded_files['berkasiiib111']}',
    berkasiiib1111 = '{$uploaded_files['berkasiiib1111']}', berkasiiib11111 = '{$uploaded_files['berkasiiib11111']}'
    WHERE id = '$id' and tahun_penilaian = '$tahun_penilaian' ";

if (mysqli_query($koneksi, $query)) {
    header("Location: page_tombolupload_guru.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>