<?php
include "koneksi.php";
session_start();

$id = $_POST['id'] ?? null;
$nama = $_POST['nama'] ?? null;

$iia1 = $_POST['iia1'] ?? null;
$iia2 = $_POST['iia2'] ?? null;
$iiab2 = $_POST['iiab2'] ?? null;

$poin_iia1 = ($iia1 == "Upload kegiatan lomba internal di IG pribadi guru") ? 1 : 0;
$poin_iia2 = ($iia2 == "Pembimbing peserta lomba") ? 1 : 0;
$poin_iiab2 = ($iiab2 == "Pembimbing pemenang lomba") ? 2 : 0;

$uploads = [
    'berkasiia1', 'berkasiia11', 'berkasiia111', 'berkasiia2', 'berkasiia22', 'berkasiia222',
    'berkasiiab2', 'berkasiiab22', 'berkasiiab222', 'berkasiiab2222',
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
// Assuming you have sanitized and validated all input data
$query = "UPDATE tabel_p_pendidikan2 SET 
    nama = '$nama',
    iia1 = '$iia1', poiniia1 = $poin_iia1, berkasiia1 = '{$uploaded_files['berkasiia1']}',
    iia2 = '$iia2', poiniia2 = $poin_iia2, berkasiia2 = '{$uploaded_files['berkasiia2']}',berkasiia22 = '{$uploaded_files['berkasiia22']}',berkasiia222 = '{$uploaded_files['berkasiia222']}',
    iiab2 = '$iiab2', poiniiab2 = $poin_iiab2, berkasiiab2 = '{$uploaded_files['berkasiiab2']}', berkasiiab22 = '{$uploaded_files['berkasiiab22']}', berkasiiab222 = '{$uploaded_files['berkasiiab222']}', berkasiiab2222 = '{$uploaded_files['berkasiiab2222']}'
    WHERE id = '$id' and tahun_penilaian = '$tahun_penilaian' ";

// Execute the query
if (mysqli_query($koneksi, $query)) {
    header("Location: page_tombolupload_guru.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>
