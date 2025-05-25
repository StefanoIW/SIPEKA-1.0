<?php
include "koneksi.php";
session_start();

$id = $_POST['id'];
$nama = $_POST['nama'];
$ivd1 = $_POST['ivd1'];

$poin_ivd1 = ($ivd1 == "Anggota") ? 1 : (($ivd1 == "Panitia inti (Ketua,sekretaris,bendahara,koordinator )/penugasan personal( fasilitator, koordinator : e-commerce, digital marketing, dan yg setara )") ? 2 : 0);

$uploads = ['berkasivd1', 'berkasivd11', 'berkasivd111'];

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
// Remove the extra comma after '{$uploaded_files['berkasivd111']}'
$query = "UPDATE tabel_p_pendidikan2 SET 
    ivd1 = '$ivd1', poinivd1 = $poin_ivd1, berkasivd1 = '{$uploaded_files['berkasivd1']}',
    berkasivd11 = '{$uploaded_files['berkasivd11']}', berkasivd111 = '{$uploaded_files['berkasivd111']}'
    WHERE id = '$id' and tahun_penilaian = '$tahun_penilaian' ";

if (mysqli_query($koneksi, $query)) {
    header("Location: page_tombolupload_guru.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>
