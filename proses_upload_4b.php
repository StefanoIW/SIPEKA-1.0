<?php
include "koneksi.php";
session_start();

$id = $_POST['id'];
$nama = $_POST['nama'];
$ivb1 = $_POST['ivb1'];

$poin_ivb1 = ($ivb1 == "Anggota") ? 1 : (($ivb1 == "Panitia inti (sekretaris, bendahara, koordinator, tim promosi publikasi, tim presentasi )") ? 2 : (($ivb1 == "Ketua PPDB") ? 3 : 0));

$uploads = ['berkasivb1', 'berkasivb11', 'berkasivb111'];

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
// Remove the extra comma after '{$uploaded_files['berkasivb111']}'
$query = "UPDATE tabel_p_pendidikan2 SET 
    ivb1 = '$ivb1', poinivb1 = $poin_ivb1, berkasivb1 = '{$uploaded_files['berkasivb1']}',
    berkasivb11 = '{$uploaded_files['berkasivb11']}', berkasivb111 = '{$uploaded_files['berkasivb111']}'
    WHERE id = '$id' and tahun_penilaian = '$tahun_penilaian'";


if (mysqli_query($koneksi, $query)) {
    header("Location: page_tombolupload_guru.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>
