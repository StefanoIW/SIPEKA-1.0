<?php
include "koneksi.php";
session_start();

$id = $_POST['id'] ?? null;
$nama = $_POST['nama'] ?? null;

$iib1 = $_POST['iib1'] ?? null;
$iib2 = $_POST['iib2'] ?? null;
$iib3 = $_POST['iib3'] ?? null;
$iib3_tambah = $_POST['iib3_tambah'] ?? null;
$iiba3 = $_POST['iiba3'] ?? null;
$iib4 = $_POST['iib4'] ?? null;
$iibb4 = $_POST['iibb4'] ?? null;
$iibc4 = $_POST['iibc4'] ?? null;

$poin_iib1 = ($iib1 == "Upload kegiatan / lomba eksternal di IG pribadi guru") ? 1 : 0;
$poin_iib2 = ($iib2 == "Pendamping tampilan/event") ? 1 : 0;
$poin_iib3 = ($iib3 == "Pembimbing peserta lomba") ? 1 : 0;
$poin_iib3_tambah = ($iib3_tambah == "Pendamping peserta lomba") ? 1 : 0;
$poin_iiba3 = 0;
if ($iiba3 == "Pembimbing pemenang lomba dan meraih kejuaraan tingkat kecamatan") {
    $poin_iiba3 = 2;
} elseif ($iiba3 == "Pembimbingan pemenang lomba dan meraih kejuaraan tingkat kota") {
    $poin_iiba3 = 3;
} elseif ($iiba3 == "Pembimbingan pemenang lomba dan meraih kejuaraan tingkat Propinsi") {
    $poin_iiba3 = 4;
}
$poin_iib4 = ($iib4 == "Pendamping outingclass / prakerin/ fieldtrip") ? 1 : 0;
$poin_iibb4 = ($iibb4 == "Pendamping tampilan/event/pameran PPD/lomba eksternal") ? 1 : 0;
$poin_iibc4 = ($iibc4 == "Pendamping home visit") ? 1 : 0;

$uploads = [
    'berkasiib1', 'berkasiib11', 'berkasiib111', 'berkasiib2', 'berkasiib22', 'berkasiib222',
    'berkasiib3', 'berkasiib33', 'berkasiib333','berkasiib3333', 'berkasiib3_tambah', 'berkasiib33_tambah', 'berkasiib333_tambah', 'berkasiib3333_tambah', 'berkasiiba3', 'berkasiiba33', 'berkasiiba333',
    'berkasiiba3333','berkasiiba33333', 'berkasiib4', 'berkasiib44', 'berkasiib444', 'berkasiibb4', 'berkasiibb44',
    'berkasiibb444', 'berkasiibc4', 'berkasiibc44'
];

$uploaded_files = [];
foreach ($uploads as $key) {
    if (isset($_FILES[$key]['name']) && $_FILES[$key]['name']) {
        $nama_file = $_FILES[$key]['name'];
        $tmp_file = $_FILES[$key]['tmp_name'];
        $nama_filefull = date("YmdHis") . $id . "_" . $nama_file;
        $lokasi_upload = "uploads/" . $nama_filefull;

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
    iib1 = '$iib1', poiniib1 = $poin_iib1, berkasiib1 = '{$uploaded_files['berkasiib1']}',
    iib2 = '$iib2', poiniib2 = $poin_iib2, berkasiib2 = '{$uploaded_files['berkasiib2']}', berkasiib22 = '{$uploaded_files['berkasiib22']}',
    iib3 = '$iib3', poiniib3 = $poin_iib3, berkasiib3 = '{$uploaded_files['berkasiib3']}', berkasiib33 = '{$uploaded_files['berkasiib33']}', berkasiib333 = '{$uploaded_files['berkasiib333']}',berkasiib3333 = '{$uploaded_files['berkasiib3333']}',
    iib3_tambah = '$iib3_tambah', poiniib3_tambah = $poin_iib3_tambah, berkasiib3_tambah = '{$uploaded_files['berkasiib3_tambah']}', berkasiib33_tambah = '{$uploaded_files['berkasiib33_tambah']}', berkasiib333_tambah = '{$uploaded_files['berkasiib333_tambah']}',berkasiib3333_tambah = '{$uploaded_files['berkasiib3333_tambah']}',
    iiba3 = '$iiba3', poiniiba3 = $poin_iiba3, berkasiiba3 = '{$uploaded_files['berkasiiba3']}', berkasiiba33 = '{$uploaded_files['berkasiiba33']}', berkasiiba333 = '{$uploaded_files['berkasiiba333']}', berkasiiba3333 = '{$uploaded_files['berkasiiba3333']}', berkasiiba33333 = '{$uploaded_files['berkasiiba33333']}',
    iib4 = '$iib4', poiniib4 = $poin_iib4, berkasiib4 = '{$uploaded_files['berkasiib4']}', berkasiib44 = '{$uploaded_files['berkasiib44']}',
    iibb4 = '$iibb4', poiniibb4 = $poin_iibb4, berkasiibb4 = '{$uploaded_files['berkasiibb4']}', berkasiibb44 = '{$uploaded_files['berkasiibb44']}',
    iibc4 = '$iibc4', poiniibc4 = $poin_iibc4, berkasiibc4 = '{$uploaded_files['berkasiibc4']}', berkasiibc44 = '{$uploaded_files['berkasiibc44']}'
    WHERE id = '$id' and tahun_penilaian = '$tahun_penilaian' ";

// Execute the query
if (mysqli_query($koneksi, $query)) {
    header("Location: page_tombolupload_guru.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>