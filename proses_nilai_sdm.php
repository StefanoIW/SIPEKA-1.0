<?php
//jalanin koneksi
session_start();
include "koneksi.php";
//nangkap data dari page_beri_nilai_2_sdm.php
$id = $_POST['id'];
$id_penilaian = $_POST['id_penilaian'];
$nama = $_POST['nama'];

$sa1 = $_POST['sa1'];//bulan1
$sa2 = $_POST['sa2'];
$sa3 = $_POST['sa3'];
$sa4 = $_POST['sa4'];


$sb1 = $_POST['sb1'];//bulan2
$sb2 = $_POST['sb2'];
$sb3 = $_POST['sb3'];
$sb4 = $_POST['sb4'];


$sc1 = $_POST['sc1'];//bulan3
$sc2 = $_POST['sc2'];
$sc3 = $_POST['sc3'];
$sc4 = $_POST['sc4'];



$sd1 = $_POST['sd1'];//bulan4
$sd2 = $_POST['sd2'];
$sd3 = $_POST['sd3'];
$sd4 = $_POST['sd4'];


$se1 = $_POST['se1'];//bulan5
$se2 = $_POST['se2'];
$se3 = $_POST['se3'];
$se4 = $_POST['se4'];


$sf1 = $_POST['sf1'];//bulan6
$sf2 = $_POST['sf2'];
$sf3 = $_POST['sf3'];
$sf4 = $_POST['sf4'];


$sg1 = $_POST['sg1'];//bulan7
$sg2 = $_POST['sg2'];
$sg3 = $_POST['sg3'];
$sg4 = $_POST['sg4'];


$sh1 = $_POST['sh1'];//bulan8
$sh2 = $_POST['sh2'];
$sh3 = $_POST['sh3'];
$sh4 = $_POST['sh4'];


$si1 = $_POST['si1'];//bulan9
$si2 = $_POST['si2'];
$si3 = $_POST['si3'];
$si4 = $_POST['si4'];


$sj1 = $_POST['sj1'];//bulan10
$sj2 = $_POST['sj2'];
$sj3 = $_POST['sj3'];
$sj4 = $_POST['sj4'];


$sk1 = $_POST['sk1'];//bulan11
$sk2 = $_POST['sk2'];
$sk3 = $_POST['sk3'];
$sk4 = $_POST['sk4'];


$sl1 = $_POST['sl1'];//bulan12
$sl2 = $_POST['sl2'];
$sl3 = $_POST['sl3'];
$sl4 = $_POST['sl4'];
$sl5 = $_POST['sl5'];

$s1 = $_POST['s1'];
$s2 = $_POST['s2'];
$s3 = $_POST['s3'];
$s4 = $_POST['s4'];

$s1 = ($sa1 + $sb1 + $sc1 + $sd1 + $se1 + $sf1 + $sg1 + $sh1 + $si1 + $sj1 + $sk1 + $sl1);
$s2 = ($sa2 + $sb2 + $sc2 + $sd2 + $se2 + $sf2 + $sg2 + $sh2 + $si2 + $sj2 + $sk2 + $sl2);
$s3 = ($sa3 + $sb3 + $sc3 + $sd3 + $se3 + $sf3 + $sg3 + $sh3 + $si3 + $sj3 + $sk3 + $sl3);
$s4 = ($sa4 + $sb4 + $sc4 + $sd4 + $se4 + $sf4 + $sg4 + $sh4 + $si4 + $sj4 + $sk4 + $sl4);

$totalnilai = ($_POST['sa1']+$_POST['sa2']+$_POST['sa3']+$_POST['sa4']+$_POST['sb1']+$_POST['sb2']+$_POST['sb3']+$_POST['sb4']+$_POST['sc1']+$_POST['sc2']+$_POST['sc3']+$_POST['sc4']+$_POST['sd1']+$_POST['sd2']+$_POST['sd3']+$_POST['sd4']+$_POST['se1']+$_POST['se2']+$_POST['se3']+$_POST['se4']+$_POST['sf1']+$_POST['sf2']+$_POST['sf3']+$_POST['sf4']+$_POST['sg1']+$_POST['sg2']+$_POST['sg3']+$_POST['sg4']+$_POST['sh1']+$_POST['sh2']+$_POST['sh3']+$_POST['sh4']+$_POST['si1']+$_POST['si2']+$_POST['si3']+$_POST['si4']+$_POST['sj1']+$_POST['sj2']+$_POST['sj3']+$_POST['sj4']+$_POST['sk1']+$_POST['sk2']+$_POST['sk3']+$_POST['sk4']+$_POST['sl1']+$_POST['sl2']+$_POST['sl3']+$_POST['sl4']+$_POST['sl5'])*100/98;
$tahun_penilaian = $_POST['tahun_penilaian'];
mysqli_query($koneksi, "UPDATE tabel_p_sdm 
                       SET total_penilaian_sdm = '$totalnilai',
                           tahun_penilaian = '$tahun_penilaian',
                           sa1 = '$sa1',
                           sa2 = '$sa2',
                           sa3 = '$sa3',
                           sa4 = '$sa4',
                           sb1 = '$sb1',
                           sb2 = '$sb2',
                           sb3 = '$sb3',
                           sb4 = '$sb4',
                           sc1 = '$sc1',
                           sc2 = '$sc2',
                           sc3 = '$sc3',
                           sc4 = '$sc4',
                           sd1 = '$sd1',
                           sd2 = '$sd2',
                           sd3 = '$sd3',
                           sd4 = '$sd4',
                           se1 = '$se1',
                           se2 = '$se2',
                           se3 = '$se3',
                           se4 = '$se4',
                           sf1 = '$sf1',
                           sf2 = '$sf2',
                           sf3 = '$sf3',
                           sf4 = '$sf4',
                           sg1 = '$sg1',
                           sg2 = '$sg2',
                           sg3 = '$sg3',
                           sg4 = '$sg4',
                           sh1 = '$sh1',
                           sh2 = '$sh2',
                           sh3 = '$sh3',
                           sh4 = '$sh4',
                           si1 = '$si1',
                           si2 = '$si2',
                           si3 = '$si3',
                           si4 = '$si4',
                           sj1 = '$sj1',
                           sj2 = '$sj2',
                           sj3 = '$sj3',
                           sj4 = '$sj4',
                           sk1 = '$sk1',
                           sk2 = '$sk2',
                           sk3 = '$sk3',
                           sk4 = '$sk4',
                           sl1 = '$sl1',
                           sl2 = '$sl2',
                           sl3 = '$sl3',
                           sl4 = '$sl4',
                           s1  = '$s1',
                           s2 = '$s2',
                           s3  = '$s3',
                           s4 = '$s4'
                       WHERE id_penilaian = '$id_penilaian' AND id = '$id'");
header("location: page_beri_nilai_sdm.php");