<?php
session_start();
include 'koneksi.php';

// Pastikan pengguna sudah login sebelumnya
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$id = (int) $_SESSION['id']; // Pastikan ID adalah integer
$tahun_ini = date("Y");
if (isset($_POST['update_nilai'])) {
    // Query untuk menghitung total poin
    $query = "SELECT 
                (COALESCE(poiniaa, 0) + COALESCE(poiniab1, 0) + COALESCE(poiniac1, 0) + 
                COALESCE(poinia2, 0) + COALESCE(poinib1, 0) + COALESCE(poinib2, 0) + 
                COALESCE(poinib3, 0) + COALESCE(poinic1, 0) + COALESCE(poinic2, 0) + 
                COALESCE(poin_kecilic2, 0) + COALESCE(poin_kecilicb2, 0) + 
                COALESCE(poinicb2, 0) + COALESCE(poinicc2, 0) + COALESCE(poinicd2, 0) + 
                COALESCE(poinid1, 0) + COALESCE(poinie1, 0) + COALESCE(poiniia1, 0) + 
                COALESCE(poiniia2, 0) + COALESCE(poiniiab2, 0) + COALESCE(poiniib1, 0) + 
                COALESCE(poiniib2, 0) + COALESCE(poiniib3, 0) + COALESCE(poiniiba3, 0) + 
                COALESCE(poiniib4, 0) + COALESCE(poiniibb4, 0) + COALESCE(poiniibc4, 0) + 
                COALESCE(poiniiia1, 0) + COALESCE(poiniiib1, 0) + COALESCE(poiniiic1, 0) + 
                COALESCE(poiniva1, 0) + COALESCE(poinivb1, 0) + COALESCE(poinivc1, 0) + 
                COALESCE(poinivd1, 0) + COALESCE(poinive1, 0) + COALESCE(poinivea1, 0) + 
                COALESCE(poinive2, 0)) AS total_poin 
              FROM tabel_p_pendidikan2 
              WHERE id = ?";
    
    // Gunakan prepared statement
    if ($stmt = $koneksi->prepare($query)) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $row = $result->fetch_assoc()) {
            $total_poin = $row['total_poin'] ?? 0; // Jika NULL, set ke 0

            // Update nilai hanya jika total_poin valid
            if ($total_poin >= 0) {
                $update_query = "UPDATE tabel_p_pendidikan2 SET nilai = ? WHERE id = ? and tahun_penilaian = ?";
                if ($stmt_update = $koneksi->prepare($update_query)) {
                    $stmt_update->bind_param("iis", $total_poin, $id, $tahun_ini);
                    if ($stmt_update->execute()) {
                        // Redirect setelah update berhasil
                        header("Location: page_tombolupload_guru.php");
                        exit();
                    } else {
                        echo "Error saat mengupdate nilai: " . $stmt_update->error;
                    }
                    $stmt_update->close();
                } else {
                    echo "Query update gagal dipersiapkan.";
                }
            } else {
                echo "Total poin tidak valid.";
            }
        } else {
            echo "Data tidak ditemukan.";
        }
        $stmt->close();
    } else {
        echo "Query gagal dipersiapkan.";
    }
    
    $koneksi->close();
}
?>
