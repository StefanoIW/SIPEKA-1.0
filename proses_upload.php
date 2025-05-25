<?php
include "koneksi.php";
session_start();

//ambil data dari page_upload_berkas_guru.php
$id = $_POST['id'];
$nama = $_POST['nama'];

$iaa = $_POST['iaa'];
$ia1 = $_POST['ia1'];
$iab1 = $_POST['iab1'];
$iac1 = $_POST['iac1'];
$ia2 = $_POST['ia2'];



$poin_iaa = 0;
if ($iaa == "Mengikuti kegiatan Seminar/Workshop/Pelatihan/KKG/MGMP /PMM/Komunitas Belajar Local") {
    $poin_iaa = 1;
} else if ($iaa == "Workshop/pelatihan Provinsi / Nasional") {
    $poin_iaa = 2   ;
} else if ($iaa == "Workshop/pelatihan Internasional ( laporan dalam Bhs Inggris )") {
    $poin_iaa = 3;
}


$poin_ia1 = 0;
if ($ia1 == "Mengikuti PMM/Komunitas Belajar") {
    $poin_ia1 = 1;
} else if ($ia1 == "Workshop/pelatihan Provinsi / Nasional") {
    $poin_ia1 = 2;
} else if ($ia1 == "Workshop/pelatihan Internasional ( laporan dalam Bhs Inggris )") {
    $poin_ia1 = 3;
}

$poin_iab1 = 0;
if ($iab1 == "Workshop/pelatihan Internal/ Forum KKG/MGMP") {
    $poin_iab1 = 1;
} else if ($iab1 == "Mengikuti kegiatan Seminar/Workshop/Pelatihan/KKG/MGMP /PMM/Komunitas Belajar Nasional") {
    $poin_iab1 = 2;
} else if ($iab1 == "Workshop/pelatihan Internasional ( laporan dalam Bhs Inggris )") {
    $poin_iab1 = 3;
}   

$poin_iac1 = 0;
if ($iac1 == "Workshop/pelatihan Internal/ Forum KKG/MGMP") {
    $poin_iac1 = 1;
} else if ($iac1 == "Workshop/pelatihan Provinsi / Nasional") {
    $poin_iac1 = 2;
} else if ($iac1 == "Workshop/pelatihan Internasional ( laporan dalam Bhs Inggris )") {
    $poin_iac1 = 3;
}

$poin_ia2 = 0;
if($ia2 == "Kegiatan yang kreatif/hasil karya"){
   $poin_ia2 = 1;
}



if ($_FILES['berkasiaa']['name']) {
    $nama_fileiaa = $_FILES['berkasiaa']['name'];
    $tmp_file = $_FILES['berkasiaa']['tmp_name'];
    $nama_fileiaafull = date("YmdHis") . $id . "_" . $nama_fileiaa;
    $lokasi_upload = "uploads/" . $nama_fileiaafull ;
 
    // Pindahkan file ke folder tujuan
    if (move_uploaded_file($tmp_file, $lokasi_upload)) {
        // File berhasil diupload
    } else {
        // File gagal diupload
        echo "Upload file gagal.";
        exit;
    }
 } else {
    $nama_fileiaa = ""; // Jika tidak ada file yang diupload, set nama file menjadi kosong
 }

 if ($_FILES['berkasiaaa']['name']) {
    $nama_fileiaaa = $_FILES['berkasiaaa']['name'];
    $tmp_file = $_FILES['berkasiaaa']['tmp_name'];
    $nama_fileiaaafull = date("YmdHis") . $id . "_" . $nama_fileiaaa;
    $lokasi_upload = "uploads/" . $nama_fileiaaafull ;
 
    // Pindahkan file ke folder tujuan
    if (move_uploaded_file($tmp_file, $lokasi_upload)) {
        // File berhasil diupload
    } else {
        // File gagal diupload
        echo "Upload file gagal.";
        exit;
    }
 } else {
    $nama_fileiaaa = ""; // Jika tidak ada file yang diupload, set nama file menjadi kosong
 }


if ($_FILES['berkasia1']['name']) {
   $nama_fileia1 = $_FILES['berkasia1']['name'];
   $tmp_file = $_FILES['berkasia1']['tmp_name'];
   $nama_fileia1full = date("YmdHis") . $id . "_" . $nama_fileia1;
   $lokasi_upload = "uploads/" . $nama_fileia1full ;

   // Pindahkan file ke folder tujuan
   if (move_uploaded_file($tmp_file, $lokasi_upload)) {
       // File berhasil diupload
   } else {
       // File gagal diupload
       echo "Upload file gagal.";
       exit;
   }
} else {
   $nama_fileia1 = ""; // Jika tidak ada file yang diupload, set nama file menjadi kosong
}
if ($_FILES['berkasia11']['name']) {
   $nama_fileia11 = $_FILES['berkasia11']['name'];
   $tmp_file = $_FILES['berkasia11']['tmp_name'];
   $nama_fileia11full = date("YmdHis") . $id . "_" . $nama_fileia11;
   $lokasi_upload = "uploads/" . $nama_fileia11full ;

   // Pindahkan file ke folder tujuan
   if (move_uploaded_file($tmp_file, $lokasi_upload)) {
       // File berhasil diupload
   } else {
       // File gagal diupload
       echo "Upload file gagal.";
       exit;
   }
} else {
   $nama_fileia11 = ""; // Jika tidak ada file yang diupload, set nama file menjadi kosong
}
if ($_FILES['berkasia111']['name']) {
   $nama_fileia111 = $_FILES['berkasia111']['name'];
   $tmp_file = $_FILES['berkasia111']['tmp_name'];
   $nama_fileia111full = date("YmdHis") . $id . "_" . $nama_fileia111;
   $lokasi_upload = "uploads/" . $nama_fileia111full ;

   // Pindahkan file ke folder tujuan
   if (move_uploaded_file($tmp_file, $lokasi_upload)) {
       // File berhasil diupload
   } else {
       // File gagal diupload
       echo "Upload file gagal.";
       exit;
   }
} else {
   $nama_fileia111 = ""; // Jika tidak ada file yang diupload, set nama file menjadi kosong
}

if ($_FILES['berkasiab1']['name']) {
   $nama_fileiab1 = $_FILES['berkasiab1']['name'];
   $tmp_file = $_FILES['berkasiab1']['tmp_name'];
   $nama_fileiab1full = date("YmdHis") . $id . "_" . $nama_fileiab1;
   $lokasi_upload = "uploads/" . $nama_fileiab1full ;

   // Pindahkan file ke folder tujuan
   if (move_uploaded_file($tmp_file, $lokasi_upload)) {
       // File berhasil diupload
   } else {
       // File gagal diupload
       echo "Upload file gagal.";
       exit;
   }
} else {
   $nama_fileiab1 = ""; // Jika tidak ada file yang diupload, set nama file menjadi kosong
}
if ($_FILES['berkasiab11']['name']) {
   $nama_fileiab11 = $_FILES['berkasiab11']['name'];
   $tmp_file = $_FILES['berkasiab11']['tmp_name'];
   $nama_fileiab11full = date("YmdHis") . $id . "_" . $nama_fileiab11;
   $lokasi_upload = "uploads/" . $nama_fileiab11full ;

   // Pindahkan file ke folder tujuan
   if (move_uploaded_file($tmp_file, $lokasi_upload)) {
       // File berhasil diupload
   } else {
       // File gagal diupload
       echo "Upload file gagal.";
       exit;
   }
} else {
   $nama_fileiab11 = ""; // Jika tidak ada file yang diupload, set nama file menjadi kosong
}
if ($_FILES['berkasiab111']['name']) {
   $nama_fileiab111 = $_FILES['berkasiab111']['name'];
   $tmp_file = $_FILES['berkasiab111']['tmp_name'];
   $nama_fileiab111full = date("YmdHis") . $id . "_" . $nama_fileiab111;
   $lokasi_upload = "uploads/" . $nama_fileiab111full ;

   // Pindahkan file ke folder tujuan
   if (move_uploaded_file($tmp_file, $lokasi_upload)) {
       // File berhasil diupload
   } else {
       // File gagal diupload
       echo "Upload file gagal.";
       exit;
   }
} else {
   $nama_fileiab111 = ""; // Jika tidak ada file yang diupload, set nama file menjadi kosong
}

if ($_FILES['berkasiac1']['name']) {
   $nama_fileiac1 = $_FILES['berkasiac1']['name'];
   $tmp_file = $_FILES['berkasiac1']['tmp_name'];
   $nama_fileiac1full = date("YmdHis") . $id . "_" . $nama_fileiac1;
   $lokasi_upload = "uploads/" . $nama_fileiac1full ;

   // Pindahkan file ke folder tujuan
   if (move_uploaded_file($tmp_file, $lokasi_upload)) {
       // File berhasil diupload
   } else {
       // File gagal diupload
       echo "Upload file gagal.";
       exit;
   }
} else {
   $nama_fileiac1 = ""; // Jika tidak ada file yang diupload, set nama file menjadi kosong
}
if ($_FILES['berkasiac11']['name']) {
   $nama_fileiac11 = $_FILES['berkasiac11']['name'];
   $tmp_file = $_FILES['berkasiac11']['tmp_name'];
   $nama_fileiac11full = date("YmdHis") . $id . "_" . $nama_fileiac11;
   $lokasi_upload = "uploads/" . $nama_fileiac11full ;

   // Pindahkan file ke folder tujuan
   if (move_uploaded_file($tmp_file, $lokasi_upload)) {
       // File berhasil diupload
   } else {
       // File gagal diupload
       echo "Upload file gagal.";
       exit;
   }
} else {
   $nama_fileiac11 = ""; // Jika tidak ada file yang diupload, set nama file menjadi kosong
}
if ($_FILES['berkasiac111']['name']) {
   $nama_fileiac111 = $_FILES['berkasiac111']['name'];
   $tmp_file = $_FILES['berkasiac111']['tmp_name'];
   $nama_fileiac111full = date("YmdHis") . $id . "_" . $nama_fileiac111;
   $lokasi_upload = "uploads/" . $nama_fileiac111full ;

   // Pindahkan file ke folder tujuan
   if (move_uploaded_file($tmp_file, $lokasi_upload)) {
       // File berhasil diupload
   } else {
       // File gagal diupload
       echo "Upload file gagal.";
       exit;
   }
} else {
   $nama_fileiac111 = ""; // Jika tidak ada file yang diupload, set nama file menjadi kosong
}


if ($_FILES['berkasia2']['name']) {
   $nama_fileia2 = $_FILES['berkasia2']['name'];
   $tmp_file = $_FILES['berkasia2']['tmp_name'];
   $nama_fileia2full = date("YmdHis") . $id . "_" . $nama_fileia2;
   $lokasi_upload = "uploads/" . $nama_fileia2full ;

   // Pindahkan file ke folder tujuan
   if (move_uploaded_file($tmp_file, $lokasi_upload)) {
       // File berhasil diupload
   } else {
       // File gagal diupload
       echo "Upload file gagal.";
       exit;
   }
} else {
   $nama_fileia2 = ""; // Jika tidak ada file yang diupload, set nama file menjadi kosong
}
if ($_FILES['berkasia22']['name']) {
   $nama_fileia22 = $_FILES['berkasia22']['name'];
   $tmp_file = $_FILES['berkasia22']['tmp_name'];
   $nama_fileia22full = date("YmdHis") . $id . "_" . $nama_fileia22;
   $lokasi_upload = "uploads/" . $nama_fileia22full ;

   // Pindahkan file ke folder tujuan
   if (move_uploaded_file($tmp_file, $lokasi_upload)) {
       // File berhasil diupload
   } else {
       // File gagal diupload
       echo "Upload file gagal.";
       exit;
   }
} else {
   $nama_fileia22 = ""; // Jika tidak ada file yang diupload, set nama file menjadi kosong
}



$tahun_penilaian = $_POST['tahun_penilaian'];
$cek_query = "SELECT * FROM tabel_p_pendidikan2 WHERE id = '$id' AND tahun_penilaian = '$tahun_penilaian'";
$result = mysqli_query($koneksi, $cek_query);



if (mysqli_num_rows($result) > 0) {
    echo "<script>
    alert('Tidak bisa menambahkan karena tahun penilaian sama');
    window.location.href = 'page_guru.php';
</script>";
} else {


$query = "UPDATE tabel_p_pendidikan2 SET poinia1 = $poin_ia1 WHERE id = $id";

$query = "UPDATE tabel_p_pendidikan2 SET poiniab1 = $poin_iab1 WHERE id = $id";

$query = "UPDATE tabel_p_pendidikan2 SET poiniac1 = $poin_iac1 WHERE id = $id";

$query = "UPDATE tabel_p_pendidikan2 SET poinia2 = $poin_ia2 WHERE id = $id";



// menginput data ke database
$query = "INSERT INTO tabel_p_pendidikan2 (
   id,
   nama, 

   iaa, 
   poiniaa,
   berkasiaa,
   berkasiaaa,


   ia1, 
   poinia1,
   berkasia1,
   berkasia11,
   berkasia111,
   iab1, 
   poiniab1,
   berkasiab1,
   berkasiab11,
   berkasiab111,
   iac1, 
   poiniac1,
   berkasiac1,
   berkasiac11,
   berkasiac111,
   ia2,
   poinia2,
   berkasia2,
   berkasia22,
   berkasia222,
   tahun_penilaian,
   validasi
) VALUES (
   '$id',
   '$nama',
   '$iaa',
   '$poin_iaa',
   '$nama_fileiaafull',
   '$nama_fileiaaafull',


   '$ia1',
   '$poin_ia1',
   '$nama_fileia1full',
   '$nama_fileia11full',
   '$nama_fileia111full',
   '$iab1',
   '$poin_iab1',
   '$nama_fileiab1full',
   '$nama_fileiab11full',
   '$nama_fileiab111full',
   '$iac1',
   '$poin_iac1',
   '$nama_fileiac1full',
   '$nama_fileiac11full',
   '$nama_fileiac111full',
   '$ia2',
   '$poin_ia2',
   '$nama_fileia2full',
   '$nama_fileia22full',
   '$nama_fileia222full',  
   '$tahun_penilaian',
   '❌'
)";


mysqli_query($koneksi, $query);

mysqli_query($koneksi, "INSERT INTO tabel_p_kepsek(id,nama,total_penilaian_kepsek,catatan_kepsek,tahun_penilaian)Values('$id','$nama','','','$tahun_penilaian') ");
mysqli_query($koneksi, "INSERT INTO tabel_p_sdm(id,nama,total_penilaian_sdm,tahun_penilaian)Values('$id','$nama','','$tahun_penilaian') ");

header("location:page_guru.php");
}
?>