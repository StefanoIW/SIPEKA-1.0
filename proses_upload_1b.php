<?php
include "koneksi.php";
session_start();

$id = $_POST['id'] ?? null;
$nama = $_POST['nama'] ?? null;

$ib1 = $_POST['ib1'] ?? null;
$ib2 = $_POST['ib2'] ?? null;
$ib3 = $_POST['ib3'] ?? null;



$poin_ib1 = 0;
if ($ib1 == "Penulisan artikel online/E-modul") {
    $poin_ib1 = 1;
} else if ($ib1 == "best Practice") {
    $poin_ib1 = 2;
}else if ($ib1 == "PTK") {
    $poin_ib1 = 3;
}else if ($ib1 == "buku/E-book") {
    $poin_ib1 = 4;
}



$poin_ib2 = 0;
if ($ib2 == "Guru melaksanakan pendekatan STEAM/STEM dalam bentuk video") {
    $poin_ib2 = 3;
}

$poin_ib3 = 0;
if ($ib3 == "bukan buatan sendiri") {
    $poin_ib3 = 1;
} else if ($ib3 == "buatan sendiri yang sederhana") {
    $poin_ib3 = 2;
} else if ($ib3 == "kolaborasi dengan siswa") {
    $poin_ib3 = 3;
}



$uploads = [
    'berkasib1', 'berkasib11', 'berkasib111', 'berkasib2', 'berkasib22', 'berkasib222',
    'berkasib3', 'berkasib33', 'berkasib333', 'berkasib4',
    'berkasib44', 'berkasib444', 'berkasib5', 'berkasib55', 'berkasib555', 'berkasib6',
    'berkasib66', 'berkasib666'
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
    ib1 = '$ib1', poinib1 = $poin_ib1, berkasib1 = '{$uploaded_files['berkasib1']}', berkasib11 = '{$uploaded_files['berkasib11']}', berkasib111 = '{$uploaded_files['berkasib111']}',
    ib2 = '$ib2', poinib2 = $poin_ib2, berkasib2 = '{$uploaded_files['berkasib2']}', berkasib22 = '{$uploaded_files['berkasib22']}', berkasib222 = '{$uploaded_files['berkasib222']}',
    ib3 = '$ib3', poinib3 = $poin_ib3, berkasib3 = '{$uploaded_files['berkasib3']}', berkasib33 = '{$uploaded_files['berkasib33']}', berkasib333 = '{$uploaded_files['berkasib333']}'
    
    WHERE id = '$id' and tahun_penilaian = '$tahun_penilaian' ";

if (mysqli_query($koneksi, $query)) {
    header("Location: page_tombolupload_guru.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>