if ($_FILES['berkasib6']['name']) {
    $nama_fileib6 = $_FILES['berkasib6']['name'];
    $tmp_file = $_FILES['berkasib6']['tmp_name'];
    $nama_fileib6full = date("YmdHis") . $id . "_" . $nama_fileib6full;
    $lokasi_upload = "uploads/" . $nama_fileib6full ;
 
    // Pindahkan file ke folder tujuan
    if (move_uploaded_file($tmp_file, $lokasi_upload)) {
        // File berhasil diupload
    } else {
        // File gagal diupload
        echo "Upload file gagal.";
        exit;
    }
 } else {
    $nama_fileib6 = ""; // Jika tidak ada file yang diupload, set nama file menjadi kosong
 }