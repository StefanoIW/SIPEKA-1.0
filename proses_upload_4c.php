<?php
include "koneksi.php";
session_start();

$id = $_POST['id'];
$nama = $_POST['nama'];
$ivc1 = $_POST['ivc1'];

$poin_ivc1 = ($ivc1 == "Anggota") ? 1 : (($ivc1 == "Ketua/ Koordinator/Waka/ K3 / BK/Wali kelas/Guru kelas") ? 2 : 0);

$uploads = ['berkasivc1', 'berkasivc11', 'berkasivc111'];

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
// Remove the extra comma after '{$uploaded_files['berkasivc111']}'
$query = "UPDATE tabel_p_pendidikan2 SET 
    ivc1 = '$ivc1', poinivc1 = $poin_ivc1, berkasivc1 = '{$uploaded_files['berkasivc1']}',
    berkasivc11 = '{$uploaded_files['berkasivc11']}', berkasivc111 = '{$uploaded_files['berkasivc111']}'
    WHERE id = '$id' and tahun_penilaian = '$tahun_penilaian' ";

if (mysqli_query($koneksi, $query)) {
    header("Location: page_tombolupload_guru.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>
