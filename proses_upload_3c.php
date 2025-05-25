<?php
include "koneksi.php";
session_start();

$id = $_POST['id'] ?? null;
$nama = $_POST['nama'] ?? null;
$iiic1 = $_POST['iiic1'] ?? null;

$poin_iiic1 = 0;
if ($iiic1 == "Moderator/Host/Juri/Guru pamong / penugasan khusus") {
    $poin_iiic1 = 1;
} elseif ($iiic1 == "Narasumber") {
    $poin_iiic1 = 2;
}

$uploads = [ 'berkasiiic1', 'berkasiiic11', 'berkasiiic111', 'berkasiiic1111', 'berkasiiic11111'];

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
// Remove the extra comma after '{$uploaded_files['berkasiiic11111']}'
$query = "UPDATE tabel_p_pendidikan2 SET 
    iiic1 = '$iiic1', poiniiic1 = $poin_iiic1, berkasiiic1 = '{$uploaded_files['berkasiiic1']}',
    berkasiiic11 = '{$uploaded_files['berkasiiic11']}', berkasiiic111 = '{$uploaded_files['berkasiiic111']}',
    berkasiiic1111 = '{$uploaded_files['berkasiiic1111']}', berkasiiic11111 = '{$uploaded_files['berkasiiic11111']}'
    WHERE id = '$id' and tahun_penilaian = '$tahun_penilaian' ";

// Execute the query
if (mysqli_query($koneksi, $query)) {
    header("Location: page_tombolupload_guru.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>