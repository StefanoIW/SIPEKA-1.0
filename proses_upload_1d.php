<?php
include "koneksi.php";
session_start();

$id = $_POST['id'] ?? null;
$nama = $_POST['nama'] ?? null;

$id1 = $_POST['id1'] ?? null;


$id2 = $_POST['id2'] ?? null;

$poin_id2 = 0;
if ($id1 == "Peserta") {
    $poin_id1 = 1;
}

$poin_id2 = 0;
if ($id2 == "Lolos babak penyisihan") {
    $poin_id2 = 2;
} else if ($id2 == "Juara lomba (minimal kejuaraan internal institusi/jenjang)") {
    $poin_id2 = 3;
} else if ($id2 == "peserta") {
    $poin_id2 = 1;
}

$uploads = [
    'berkasid1',
    'berkasid11',
    'berkasid111',
    'berkasid2',
    'berkasid22',
    'berkasid222'
];

$uploaded_files = [];
foreach ($uploads as $key) {
    if (isset($_FILES[$key]['name']) && $_FILES[$key]['name']) {
        $nama_file = $_FILES[$key]['name'];
        $tmp_file = $_FILES[$key]['tmp_name'];
        $nama_filefull = date("YmdHis") . $id . "_" . $nama_file;
        $lokasi_upload = "uploads/" . $nama_filefull;

        if (move_uploaded_file($tmp_file, $lokasi_upload)) {
            $uploaded_files[$key] = $nama_file;
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
    id1 = '$id1',  berkasid1 = '{$uploaded_files['berkasid1']}', berkasid11 = '{$uploaded_files['berkasid11']}', berkasid111 = '{$uploaded_files['berkasid111']}',
    id2 = '$id2', poinid2 = $poin_id2, berkasid2 = '{$uploaded_files['berkasid2']}', berkasid22 = '{$uploaded_files['berkasid22']}', berkasid222 = '{$uploaded_files['berkasid222']}'
    WHERE id = '$id' and tahun_penilaian = '$tahun_penilaian' ";

if (mysqli_query($koneksi, $query)) {
    header("Location: page_tombolupload_guru.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
