<?php
include "koneksi.php";
session_start();

$id = $_POST['id'];
$nama = $_POST['nama'];
$iva1 = $_POST['iva1'];

$poin_iva1 = ($iva1 == "Anggota") ? 1 : (($iva1 == "Panitia Inti Ketua, Sekretaris, Bendahara, dan Koordinator") ? 2 : 0);

$uploads = ['berkasiva1', 'berkasiva11', 'berkasiva111'];

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
// Remove the extra comma after '{$uploaded_files['berkasiva111']}'
$query = "UPDATE tabel_p_pendidikan2 SET 
    iva1 = '$iva1', poiniva1 = $poin_iva1, berkasiva1 = '{$uploaded_files['berkasiva1']}',
    berkasiva11 = '{$uploaded_files['berkasiva11']}', berkasiva111 = '{$uploaded_files['berkasiva111']}'
    WHERE id = '$id' and tahun_penilaian = '$tahun_penilaian' ";

if (mysqli_query($koneksi, $query)) {
    header("Location: page_tombolupload_guru.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>
