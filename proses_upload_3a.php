<?php
include "koneksi.php";
session_start();

$id = $_POST['id'] ?? null;
$nama = $_POST['nama'] ?? null;
$iiia1 = $_POST['iiia1'] ?? null;

$poin_iiia1 = ($iiia1 == "Pendampingan teman sejawat") ? 2 : 0;

$uploads = ['berkasiiia1', 'berkasiiia11', 'berkasiiia111', 'berkasiiia1111'];

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
    iiia1 = '$iiia1', poiniiia1 = $poin_iiia1, berkasiiia1 = '{$uploaded_files['berkasiiia1']}',
    berkasiiia11 = '{$uploaded_files['berkasiiia11']}', berkasiiia111 = '{$uploaded_files['berkasiiia111']}', berkasiiia1111 = '{$uploaded_files['berkasiiia1111']}'
    WHERE id = '$id' and tahun_penilaian = '$tahun_penilaian' ";

if (mysqli_query($koneksi, $query)) {
    header("Location: page_tombolupload_guru.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>