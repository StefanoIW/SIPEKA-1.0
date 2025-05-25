<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $skor_fix = $_POST['skor_fix']; // Perbaikan variabel

    // Perbaikan query
    $query = "UPDATE tabel_p_pendidikan2 SET apoiniaa = '$skor_fix' WHERE id = '$id'";
    mysqli_query($koneksi, $query);
}
?>
