<?php
include "koneksi.php";

$Q = mysqli_query($koneksi, "UPDATE tabel_p_pendidikan2 SET Aktivasi = '0' ");
header ("Location: page_setting_admin.php");
?>
