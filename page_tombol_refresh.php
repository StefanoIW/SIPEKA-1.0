<?php
$host = 'localhost'; // Sesuaikan dengan host database Anda
$username = 'root'; // Sesuaikan dengan username database Anda
$password = ''; // Sesuaikan dengan password database Anda
$dbname = 'nusputbarubanget'; // Sesuaikan dengan nama database Anda

// Buat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Update nilai
$sql = "UPDATE tabel_p_pendidikan2 SET 
        nilai = (
            poinia1 + poiniab1 + poiniac1 + poinia2 + poinib1 + poinib2 + poinib3 + poinib4 + poinib5 + poinib6 + 
            poinic1 + poinic2 + poinicb2 + poinicd2 + poinid1 + poinie1 + poiniia1 + poiniia2 + poiniiab2 + 
            poiniib1 + poiniib2 + poiniib3 + poiniiba3 + poiniib4 + poiniibb4 + poiniibc4 + poiniiia1 + poiniiib1 + 
            poiniiic1 + poiniva1 + poinivb1 + poinivc1 + poinivd1 + poinive1 + poinivea1 + poinive2
        ) * 100 / 47";

if ($conn->query($sql) === TRUE) {
    echo "Kolom nilai berhasil diperbarui";
} else {
    echo "Error: " . $conn->error;
}

// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Nilai</title>
</head>
<body>
    <form method="POST" action="proses_update_nilai.php">
        <label style="font-weight: bold; color: black;">Update Nilai</label>
        <button type="submit" name="update_nilai">Update Nilai</button>
    </form>
</body>
</html>
