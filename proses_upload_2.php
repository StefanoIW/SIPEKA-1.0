<?php
include "koneksi.php";
session_start();

$id = $_POST['id'] ?? null;
$nama = $_POST['nama'] ?? null;

$iia1 = $_POST['iia1'] ?? null;
$iia2 = $_POST['iia2'] ?? null;
$iiab2 = $_POST['iiab2'] ?? null;
$iib1 = $_POST['iib1'] ?? null;
$iib2 = $_POST['iib2'] ?? null;
$iib3 = $_POST['iib3'] ?? null;
$iiba3 = $_POST['iiba3'] ?? null;
$iib4 = $_POST['iib4'] ?? null;
$iibb4 = $_POST['iibb4'] ?? null;
$iibc4 = $_POST['iibc4'] ?? null;

$poin_iia1 = ($iia1 == "Upload kegiatan lomba internal di IG pribadi guru") ? 1 : 0;
$poin_iia2 = ($iia2 == "Pembimbing peserta lomba") ? 1 : 0;
$poin_iiab2 = ($iiab2 == "Pembimbing pemenang lomba") ? 2 : 0;
$poin_iib1 = ($iib1 == "Upload kegiatan / lomba eksternal di IG pribadi guru") ? 1 : 0;
$poin_iib2 = ($iib2 == "Pembimbing tampilan/event") ? 1 : 0;
$poin_iib3 = ($iib3 == "Pembimbing peserta lomba") ? 1 : 0;
$poin_iiba3 = 0;
if($iiba3 == "Pembimbing pemenang lomba dan meraih kejuaraan tingkat kecamatan"){
   $poin_iiba3 = 2;
} elseif($iiba3 == "Pembimbingan pemenang lomba dan meraih kejuaraan tingkat kota"){
   $poin_iiba3 = 3;
} elseif($iiba3 == "Pembimbingan pemenang lomba dan meraih kejuaraan tingkat Propinsi"){
   $poin_iiba3 = 4;
}
$poin_iib4 = ($iib4 == "Pendamping outingclass / prakerin/ fieldtrip") ? 1 : 0;
$poin_iibb4 = ($iibb4 == "Pendamping tampilan/event/pameran PPD/lomba eksternal") ? 2 : 0;
$poin_iibc4 = ($iibc4 == "Pendamping home visit") ? 3 : 0;

$uploads = [
    'berkasiia1', 'berkasiia11', 'berkasiia111', 'berkasiia2', 'berkasiia22', 'berkasiia222',
    'berkasiiab2', 'berkasiiab22', 'berkasiiab222', 'berkasiiab2222',
    'berkasiib1', 'berkasiib11', 'berkasiib111', 'berkasiib2', 'berkasiib22', 'berkasiib222',
    'berkasiib3', 'berkasiib33', 'berkasiib333', 'berkasiiba3', 'berkasiiba33', 'berkasiiba333',
    'berkasiiba3333', 'berkasiib4', 'berkasiib44', 'berkasiib444', 'berkasiibb4', 'berkasiibb44',
    'berkasiibb444', 'berkasiibc4', 'berkasiibc44'
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

// Assuming you have sanitized and validated all input data
$query = "UPDATE tabel_p_pendidikan2 SET 
    nama = '$nama',
    iia1 = '$iia1', poiniia1 = $poin_iia1, berkasiia1 = '{$uploaded_files['berkasiia1']}',
    iia2 = '$iia2', poiniia2 = $poin_iia2, berkasiia2 = '{$uploaded_files['berkasiia2']}',
    iiab2 = '$iiab2', poiniiab2 = $poin_iiab2, berkasiiab2 = '{$uploaded_files['berkasiiab2']}',
    iib1 = '$iib1', poiniib1 = $poin_iib1, berkasiib1 = '{$uploaded_files['berkasiib1']}',
    iib2 = '$iib2', poiniib2 = $poin_iib2, berkasiib2 = '{$uploaded_files['berkasiib2']}',
    iib3 = '$iib3', poiniib3 = $poin_iib3, berkasiib3 = '{$uploaded_files['berkasiib3']}',
    iiba3 = '$iiba3', poiniiba3 = $poin_iiba3, berkasiiba3 = '{$uploaded_files['berkasiiba3']}',
    iib4 = '$iib4', poiniib4 = $poin_iib4, berkasiib4 = '{$uploaded_files['berkasiib4']}',
    iibb4 = '$iibb4', poiniibb4 = $poin_iibb4, berkasiibb4 = '{$uploaded_files['berkasiibb4']}',
    iibc4 = '$iibc4', poiniibc4 = $poin_iibc4, berkasiibc4 = '{$uploaded_files['berkasiibc4']}'
    WHERE id = '$id'";

// Execute the query
if (mysqli_query($koneksi, $query)) {
    header("Location: page_tombolupload_guru.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>
