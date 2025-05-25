<?php
// Lakukan koneksi ke database (Sesuaikan dengan informasi database Anda)
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "nusg7898_pkg"; // Ganti dengan nama database Anda


// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Periksa apakah form telah disubmit
// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap nilai dari formulir
    if(isset($_POST['id_penilaian'])) {
        $id_penilaian = $_POST['id_penilaian'];
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        
        $ia1 = $_POST['ia1'];
        $poinia1 = $_POST['poinia1'];
        $apoinia1 = $_POST['apoinia1'];

        $iab1 = $_POST['iab1'];
        $poiniab1 = $_POST['poiniab1'];
        $apoiniab1 = $_POST['apoiniab1'];

        $iac1 = $_POST['iac1'];
        $poiniac1 = $_POST['poiniac1'];
        $apoiniac1 = $_POST['apoiniac1'];

        $ia2 = $_POST['ia2'];
        $poinia2 = $_POST['poinia2'];
        $apoinia2 = $_POST['apoinia2'];

        $ib1 = $_POST['ib1'];
        $poinib1 = $_POST['poinib1'];
        $apoinib1 = $_POST['apoinib1'];

        $ib2 = $_POST['ib2'];
        $poinib2 = $_POST['poinib2'];
        $apoinib2 = $_POST['apoinib2'];

        $ib3 = $_POST['ib3'];
        $poinib3 = $_POST['poinib3'];
        $apoinib3 = $_POST['apoinib3'];

        $ib4 = $_POST['ib4'];
        $poinib4 = $_POST['poinib4'];
        $apoinib4 = $_POST['apoinib4'];

        $ib5 = $_POST['ib5'];
        $poinib5 = $_POST['poinib5'];
        $apoinib5 = $_POST['apoinib5'];

        $ib6 = $_POST['ib6'];
        $poinib6 = $_POST['poinib6'];
        $apoinib6 = $_POST['apoinib6'];

        $ic1 = $_POST['ic1'];
        $poinic1 = $_POST['poinic1'];
        $apoinic1 = $_POST['apoinic1'];

        $ic2 = $_POST['ic2'];
        $poinic2 = $_POST['poinic2'];
        $apoinic2 = $_POST['apoinic2'];

        $icb2 = $_POST['icb2'];
        $poinicb2 = $_POST['poinicb2'];
        $apoinicb2 = $_POST['apoinicb2'];

        $icc2 = $_POST['icc2'];
        $poinicc2 = $_POST['poinicc2'];
        $apoinicc2 = $_POST['apoinicc2'];

        $icd2 = $_POST['icd2'];
        $poinicd2 = $_POST['poinicd2'];
        $apoinicd2 = $_POST['apoinicd2'];

        $id1 = $_POST['id1'];
        $poinid1 = $_POST['poinid1'];
        $apoinid1 = $_POST['apoinid1'];

        $ie1 = $_POST['ie1'];
        $poinie1 = $_POST['poinie1'];
        $apoinie1 = $_POST['apoinie1'];

        $iia1 = $_POST['iia1'];
        $poiniia1 = $_POST['poiniia1'];
        $apoiniia1 = $_POST['apoiniia1'];

        $iia2 = $_POST['iia2'];
        $poiniia2 = $_POST['poiniia2'];
        $apoiniia2 = $_POST['apoiniia2'];
    
        $iiab2 = $_POST['iiab2'];
        $poiniiab2 = $_POST['poiniiab2'];
        $apoiniiab2 = $_POST['apoiniiab2'];

        $iib1 = $_POST['iib1'];
        $poiniib1 = $_POST['poiniib1'];
        $apoiniib1 = $_POST['apoiniib1'];
        
        $iib2 = $_POST['iib2'];
        $poiniib2 = $_POST['poiniib2'];
        $apoiniib2 = $_POST['apoiniib2'];

        $iib3 = $_POST['iib3'];
        $poiniib3 = $_POST['poiniib3'];
        $apoiniib3 = $_POST['apoiniib3'];

        $iiba3 = $_POST['iiba3'];
        $poiniiba3 = $_POST['poiniiba3'];
        $apoiniiba3 = $_POST['apoiniiba3'];

        $iib4 = $_POST['iib4'];
        $poiniib4 = $_POST['poiniib4'];
        $apoiniib4 = $_POST['apoiniib4'];

        $iibb4 = $_POST['iibb4'];
        $poiniibb4 = $_POST['poiniibb4'];
        $apoiniibb4 = $_POST['apoiniibb4'];

        $iibc4 = $_POST['iibc4'];
        $poiniibc4 = $_POST['poiniibc4'];
        $apoiniibc4 = $_POST['apoiniibc4'];

        $iiia1 = $_POST['iiia1'];
        $poiniiia1 = $_POST['poiniiia1'];
        $apoiniiia1 = $_POST['apoiniiia1'];

        $iiib1 = $_POST['iiib1'];
        $poiniiib1 = $_POST['poiniiib1'];
        $apoiniiib1 = $_POST['apoiniiib1'];

        $iiic1 = $_POST['iiic1'];
        $poiniiic1 = $_POST['poiniiic1'];
        $apoiniiic1 = $_POST['apoiniiic1'];

        $iva1 = $_POST['iva1'];
        $poiniva1 = $_POST['poiniva1'];
        $apoiniva1 = $_POST['apoiniva1'];

        $ivb1 = $_POST['ivb1'];
        $poinivb1 = $_POST['poinivb1'];
        $apoinivb1 = $_POST['apoinivb1'];

        $ivc1 = $_POST['ivc1'];
        $poinivc1 = $_POST['poinivc1'];
        $apoinivc1 = $_POST['apoinivc1'];

        $ivd1 = $_POST['ivd1'];
        $poinivd1 = $_POST['poinivd1'];
        $apoinivd1 = $_POST['apoinivd1'];

        $ive1 = $_POST['ive1'];
        $poinive1 = $_POST['poinive1'];
        $apoinive1 = $_POST['apoinive1'];

        $ivea1 = $_POST['ivea1'];
        $poinivea1 = $_POST['poinivea1'];
        $apoinivea1 = $_POST['apoinivea1'];

        $ive2 = $_POST['ive2'];
        $poinive2 = $_POST['poinive2'];
        $apoinive2 = $_POST['apoinive2'];

        $tahun_penilaian = $_POST['tahun_penilaian'];
        $nilaivalidasi = $_POST['nilaivalidasi'];
        $validasi = $_POST['validasi'];
    
        $nilaivalidasi = ($apoinia1 +$apoiniab1 +$apoiniac1 + $apoinia2 + $apoinib1 + $apoinib2 + $apoinib3 + $apoinib4 + $apoinib5 + $apoinib6+ $apoinic1+ $apoinic2+ $apoinicb2+ $apoinicc2+ $apoinicd2+ $apoinid1+ $apoinie1 + $apoiniia1 + $apoiniia2 + $apoiniiab2+ $apoiniib1 + $apoiniib2 + $apoiniib3+ $apoiniiba3 + $apoiniib4 + $apoiniibb4 + $apoiniibc4 + $apoiniiia1 + $apoiniiib1 + $apoiniiic1 + $apoiniva1 + $apoinivb1 + $apoinivc1 + $apoinivd1 + $apoinive1 +$apoinivea1+ $apoinive2) ;
        // Siapkan query SQL untuk menyimpan nilai ke dalam tabel_p_pendidikan_3
        $sql = "UPDATE tabel_p_pendidikan2 SET 
        id = '$id',
        nama = '$nama',
        ia1 = '$ia1',
        poinia1 = '$poinia1',
        apoinia1 = '$apoinia1',
        iab1 = '$iab1',
        poiniab1 = '$poiniab1',
        apoiniab1 = '$apoiniab1',
        iac1 = '$iac1',
        poiniac1 = '$poiniac1',
        apoiniac1 = '$apoiniac1',
        ia2 = '$ia2',
        poinia2 = '$poinia2',
        apoinia2 = '$apoinia2',
        ib1 = '$ib1',
        poinib1 = '$poinib1',
        apoinib1 = '$apoinib1',
        ib2 = '$ib2',
        poinib2 = '$poinib2',
        apoinib2 = '$apoinib2',
        ib3 = '$ib3',
        poinib3 = '$poinib3',
        apoinib3 = '$apoinib3',
        ib4 = '$ib4',
        poinib4 = '$poinib4',
        apoinib4 = '$apoinib4',
        ib5 = '$ib5',
        poinib5 = '$poinib5',
        apoinib5 = '$apoinib5',
        ib6 = '$ib6',
        poinib6 = '$poinib6',
        apoinib6 = '$apoinib6',
        ic1 = '$ic1',
        poinic1 = '$poinic1',
        apoinic1= '$apoinic1',
        ic2 = '$ic2',
        poinic2 = '$poinic2',
        apoinic2 = '$apoinic2',
        icb2 = '$icb2',
        poinicb2 = '$poinicb2',
        apoinicb2= '$apoinicb2',
        icc2 = '$icc2',
        poinicc2 = '$poinicc2',
        apoinicc2 = '$apoinicc2',
        icd2 = '$icd2',
        poinicd2 = '$poinicd2',
        apoinicd2 = '$apoinicd2',
        id1 = '$id1',
        poinid1 = '$poinid1',
        apoinid1 = '$apoinid1',
        ie1 = '$ie1',
        poinie1 = '$poinie1',
        apoinie1 = '$apoinie1',
        iia1 = '$iia1',
        poiniia1 = '$poiniia1',
        apoiniia1 = '$apoiniia1',
        iia2 = '$iia2',
        poiniia2 = '$poiniia2',
        apoiniia2 = '$apoiniia2',
        iiab2 = '$iiab2',
        poiniiab2 = '$poiniiab2',
        apoiniiab2 = '$apoiniiab2',
        iib1 = '$iib1',
        poiniib1 = '$poiniib1',
        apoiniib1 = '$apoiniib1',
        iib2 = '$iib2',
        poiniib2 = '$poiniib2',
        apoiniib2 = '$apoiniib2',
        iib3 = '$iib3',
        poiniib3 = '$poiniib3',
        apoiniib3 = '$apoiniib3',
        iiba3 = '$iiba3',
        poiniiba3 = '$poiniiba3',
        apoiniiba3 = '$apoiniiba3',
        iib4 = '$iib4',
        poiniib4 = '$poiniib4',
        apoiniib4 = '$apoiniib4',
        iibb4 = '$iibb4',
        poiniibb4 = '$poiniibb4',
        apoiniibb4 = '$apoiniibb4',
        iibc4 = '$iibc4',
        poiniibc4 = '$poiniibc4',
        apoiniibc4 = '$apoiniibc4',
        iiia1 = '$iiia1',
        poiniiia1 = '$poiniiia1',
        apoiniiia1 = '$apoiniiia1',
        iiib1 = '$iiib1',
        poiniiib1 = '$poiniiib1',
        apoiniiib1 = '$apoiniiib1',
        iiic1 = '$iiic1',
        poiniiic1 = '$poiniiic1',
        apoiniiic1 = '$apoiniiic1',
        iva1 = '$iva1',
        poiniva1 = '$poiniva1',
        apoiniva1 = '$apoiniva1',
        ivb1 = '$ivb1',
        poinivb1 = '$poinivb1',
        apoinivb1 = '$apoinivb1',
        ivc1 = '$ivc1',
        poinivc1 = '$poinivc1',
        apoinivc1 = '$apoinivc1',
        ivd1 = '$ivd1',
        poinivd1 = '$poinivd1',
        apoinivd1 = '$apoinivd1',
        ive1 = '$ive1',
        poinive1 = '$poinive1',
        apoinive1 = '$apoinive1',
        ivea1 = '$ivea1',
        poinivea1 = '$poinivea1',
        apoinivea1 = '$apoinivea1',
        ive2 = '$ive2',
        poinive2 = '$poinive2',
        apoinive2 = '$apoinive2',
        tahun_penilaian = '$tahun_penilaian',
        nilaivalidasi = '$nilaivalidasi',
        validasi = '$validasi'
        WHERE id_penilaian = '$id_penilaian'";

        // Jalankan query dan periksa apakah berhasil
        if ($conn->query($sql) === TRUE) {
           header("location: page_beri_nilai_pendidikan.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "ID penilaian tidak tersedia.";
    }
}

// Tutup koneksi database
$conn->close();
?>