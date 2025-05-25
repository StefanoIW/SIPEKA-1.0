<?php
include "koneksi.php";
session_start();

$id = $_POST['id'] ?? null;
$nama = $_POST['nama'] ?? null;

$kecilicb2 = $_POST['kecilicb2'] ?? null;
$kecilic2 = $_POST['kecilic2'] ?? null;
$ic1 = $_POST['ic1'] ?? null;
$ic2 = $_POST['ic2'] ?? null;
$icb2 = $_POST['icb2'] ?? null;
$icc2 = $_POST['icc2'] ?? null;
$icd2 = $_POST['icd2'] ?? null;

$poin_ic1 = 0;
if($ic1 == "membuka, menutup pembelajaran"){
   $poin_ic1 = 1;
}elseif($ic1 == "membuka, menutup pembelajaran serta percakapan sederhana dalam proses pembelajaran"){
   $poin_ic1 = 2;
}elseif($ic1 == "membuka, menutup pembelajaran serta percakapan aktif dalam proses pembelajaran"){
   $poin_ic1 = 3;
}

$poin_kecilic2 = 0;
if($kecilic2 == "Melakukan Kegiatan"){
   $poin_kecilic2 = 2;
} else if($kecilic2 == "pernah membuat hasil karya"){
    $poin_kecilic2 = 4;
}

$poin_kecilicb2 = 0;
if($kecilicb2 == "Melakukan laporan"){
   $poin_kecilicb2 = 4;
} else if($kecilicb2 == "pernah membuat hasil karya"){
    $poin_kecilicb2 = 4;
}

$poin_ic2 = 0;
if($ic2 == "Melakukan Kegiatan"){
   $poin_ic2 = 2;
} else if($ic2 == "pernah membuat hasil karya"){
    $poin_ic2 = 4;
}
$poin_icb2 = 0;
if($icb2 == "Melakukan Kegiatan"){
   $poin_icb2 = 2;
}else if($icb2 == "Melakukan laporan"){
    $poin_icb2 = 4;
}
$poin_icc2 = 0;
if($icc2 == "Melakukan Kegiatan"){
   $poin_icc2 = 2;
}
$poin_icd2 = 0;
if($icd2 == "Melakukan Kegiatan"){
   $poin_icd2 = 2;
}

$uploads = [
    'berkasic1', 'berkasic11', 'berkasic111', 'berkasic2', 'kecilberkasic2', 'kecilberkasic22', 'kecilberkasicb2',  'berkasicb2',
    'berkasicc2', 'berkasicd2'
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
    ic1 = '$ic1', poinic1 = $poin_ic1, berkasic1 = '{$uploaded_files['berkasic1']}', berkasic11 = '{$uploaded_files['berkasic11']}', berkasic111 = '{$uploaded_files['berkasic111']}',
    ic2 = '$ic2', poinic2 = $poin_ic2, berkasic2 = '{$uploaded_files['berkasic2']}',
    kecilic2 = '$kecilic2', poin_kecilic2 = $poin_kecilic2, kecilberkasic2 = '{$uploaded_files['kecilberkasic2']}', kecilberkasic22 = '{$uploaded_files['kecilberkasic22']}',
    kecilicb2 = '$kecilicb2', poin_kecilicb2 = $poin_kecilicb2, kecilberkasicb2 = '{$uploaded_files['kecilberkasicb2']}',
    icb2 = '$icb2', poinicb2 = $poin_icb2, berkasicb2 = '{$uploaded_files['berkasicb2']}', 
    icc2 = '$icc2', poinicc2 = $poin_icc2, berkasicc2 = '{$uploaded_files['berkasicc2']}', 
    icd2 = '$icd2', poinicd2 = $poin_icd2, berkasicd2 = '{$uploaded_files['berkasicd2']}'
    WHERE id = '$id' and tahun_penilaian = '$tahun_penilaian' ";

if (mysqli_query($koneksi, $query)) {
    header("Location: page_tombolupload_guru.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>
