<?php
session_start();
include "koneksi.php";

$id = $_POST['id'];
$id_penilaian = $_POST['id_penilaian'];
$tahun_penilaian = $_POST['tahun_penilaian'];
$catatan_kepsek = $_POST['catatan_kepsek']; 



$ka1 = $_POST['ka1'];
$ka2 = $_POST['ka2'];
$ka3 = $_POST['ka3'];
$ka4 = $_POST['ka4'];
$ka5 = $_POST['ka5'];
$ka6 = $_POST['ka6'];


$kb1 = $_POST['kb1']; 
$kb2 = $_POST['kb2']; 
$kb3 = $_POST['kb3']; 
$kb4 = $_POST['kb4']; 
$kb5 = $_POST['kb5']; 
$kb6 = $_POST['kb6'];
$kb7 = $_POST['kb7']; 
$kb8 = $_POST['kb8']; 
$kb9 = $_POST['kb9']; 
$kb10 = $_POST['kb10']; 
$kb11 = $_POST['kb11']; 
$kb12 = $_POST['kb12'];
$kb13 = $_POST['kb13']; 
$kb14 = $_POST['kb14']; 
$kb15 = $_POST['kb15']; 
$kb16 = $_POST['kb16']; 
$kb17 = $_POST['kb17']; 
$kb18 = $_POST['kb18'];
$kb19 = $_POST['kb19']; 
$kb20 = $_POST['kb20']; 
$kb21 = $_POST['kb21']; 
$kb22 = $_POST['kb22']; 
$kb23 = $_POST['kb23']; 


$kc1 = $_POST['kc1']; 
$kc2 = $_POST['kc2']; 
$kc3 = $_POST['kc3']; 
$kc4 = $_POST['kc4']; 
$kc5 = $_POST['kc5']; 
$kc6 = $_POST['kc6'];
$kc7 = $_POST['kc7']; 
$kc8 = $_POST['kc8']; 
$kc9 = $_POST['kc9']; 



$kd1 = $_POST['kd1']; 
$kd2 = $_POST['kd2']; 
$kd3 = $_POST['kd3']; 
$kd4 = $_POST['kd4']; 
$kd5 = $_POST['kd5']; 



$ke1 = $_POST['ke1'];
$ke2 = $_POST['ke2'];
$ke3 = $_POST['ke3'];
$ke4 = $_POST['ke4'];
$ke5 = $_POST['ke5'];



$kf1 = $_POST['kf1'];
$kf2 = $_POST['kf2'];
$kf3 = $_POST['kf3'];
$kf4 = $_POST['kf4'];
$kf5 = $_POST['kf5'];



$kg1 = $_POST['kg1'];
$kg2 = $_POST['kg2'];
$kg3 = $_POST['kg3'];



$kh1 = $_POST['kh1'];
$kh2 = $_POST['kh2'];


$ki1 = $_POST['ki1']; 
$ki2 = $_POST['ki2']; 
$ki3 = $_POST['ki3']; 
$ki4 = $_POST['ki4']; 
$ki5 = $_POST['ki5']; 
$ki6 = $_POST['ki6'];
$ki7 = $_POST['ki7']; 








// Calculate points for ka1
if ($ka1 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ka1 = 0;
} else if ($ka1 == "Terpenuhi sebagian (<=85%)") {
    $poin_ka1 = 1;
} else if ($ka1 == "Terpenuhi seluruhnya") {
    $poin_ka1 = 2;
}

// Calculate points for ka2
if ($ka2 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ka2 = 0;
} else if ($ka2 == "Terpenuhi sebagian (<=85%)") {
    $poin_ka2 = 1;
} else if ($ka2 == "Terpenuhi seluruhnya") {
    $poin_ka2 = 2;
}

// Calculate points for ka3
if ($ka3 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ka3 = 0;
} else if ($ka3 == "Terpenuhi sebagian (<=85%)") {
    $poin_ka3 = 1;
} else if ($ka3 == "Terpenuhi seluruhnya") {
    $poin_ka3 = 2;
}

// Calculate points for ka4
if ($ka4 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ka4 = 0;
} else if ($ka4 == "Terpenuhi sebagian (<=85%)") {
    $poin_ka4 = 1;
} else if ($ka4 == "Terpenuhi seluruhnya") {
    $poin_ka4 = 2;
}

// Calculate points for ka5
if ($ka5 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ka5 = 0;
} else if ($ka5 == "Terpenuhi sebagian (<=85%)") {
    $poin_ka5 = 1;
} else if ($ka5 == "Terpenuhi seluruhnya") {
    $poin_ka5 = 2;
}

// Calculate points for ka6
if ($ka6 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ka6 = 0;
} else if ($ka6 == "Terpenuhi sebagian (<=85%)") {
    $poin_ka6 = 1;
} else if ($ka6 == "Terpenuhi seluruhnya") {
    $poin_ka6 = 2;
}


$poin_kb1 = 0;
if ($kb1 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb1 = 0;
} else if ($kb1 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb1 = 1;
} else if ($kb1 == "Terpenuhi seluruhnya") {
    $poin_kb1 = 2;
}

$poin_kb2 = 0;
if ($kb2 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb2 = 0;
} else if ($kb2 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb2 = 1;
} else if ($kb2 == "Terpenuhi seluruhnya") {
    $poin_kb2 = 2;
} 

$poin_kb3 = 0;
if ($kb3 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb3 = 0;
} else if ($kb3 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb3 = 1;
} else if ($kb3 == "Terpenuhi seluruhnya") {
    $poin_kb3 = 2;
} 

$poin_kb4 = 0;
if ($kb4 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb4 = 0;
} else if ($kb4 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb4 = 1;
} else if ($kb4 == "Terpenuhi seluruhnya") {
    $poin_kb4 = 2;
} 

$poin_kb5 = 0;
if ($kb5 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb5 = 0;
} else if ($kb5 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb5 = 1;
} else if ($kb5 == "Terpenuhi seluruhnya") {
    $poin_kb5 = 2;
} 

$poin_kb6 = 0;
if ($kb6 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb6 = 0;
} else if ($kb6 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb6 = 1;
} else if ($kb6 == "Terpenuhi seluruhnya") {
    $poin_kb6 = 2;
} 

$poin_kb7 = 0;
if ($kb7 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb7 = 0;
} else if ($kb7 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb7 = 1;
} else if ($kb7 == "Terpenuhi seluruhnya") {
    $poin_kb7 = 2;
} 

$poin_kb8 = 0;
if ($kb8 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb8 = 0;
} else if ($kb8 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb8 = 1;
} else if ($kb8 == "Terpenuhi seluruhnya") {
    $poin_kb8 = 2;
} 

$poin_kb9 = 0;
if ($kb9 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb9 = 0;
} else if ($kb9 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb9 = 1;
} else if ($kb9 == "Terpenuhi seluruhnya") {
    $poin_kb9 = 2;
} 

$poin_kb10 = 0;
if ($kb10 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb10 = 0;
} else if ($kb2 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb10 = 1;
} else if ($kb10 == "Terpenuhi seluruhnya") {
    $poin_kb10 = 2;
} 

$poin_kb11 = 0;
if ($kb11 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb11 = 0;
} else if ($kb11 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb11 = 1;
} else if ($kb11 == "Terpenuhi seluruhnya") {
    $poin_kb11 = 2;
} 

$poin_kb12 = 0;
if ($kb12 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb12 = 0;
} else if ($kb12 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb12 = 1;
} else if ($kb12 == "Terpenuhi seluruhnya") {
    $poin_kb12 = 2;
} 

$poin_kb13 = 0;
if ($kb13 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb13 = 0;
} else if ($kb13 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb13 = 1;
} else if ($kb13 == "Terpenuhi seluruhnya") {
    $poin_kb13 = 2;
} 

$poin_kb14 = 0;
if ($kb14 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb14 = 0;
} else if ($kb14 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb14 = 1;
} else if ($kb14 == "Terpenuhi seluruhnya") {
    $poin_kb14 = 2;
} 

$poin_kb15 = 0;
if ($kb15 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb15 = 0;
} else if ($kb15 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb15 = 1;
} else if ($kb15 == "Terpenuhi seluruhnya") {
    $poin_kb15 = 2;
} 

$poin_kb16 = 0;
if ($kb16 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb16 = 0;
} else if ($kb16 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb16 = 1;
} else if ($kb16 == "Terpenuhi seluruhnya") {
    $poin_kb16 = 2;
} 

$poin_kb17 = 0;
if ($kb17 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb17 = 0;
} else if ($kb17 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb17 = 1;
} else if ($kb17 == "Terpenuhi seluruhnya") {
    $poin_kb17 = 2;
} 

$poin_kb18 = 0;
if ($kb18 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb18 = 0;
} else if ($kb18 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb18 = 1;
} else if ($kb18 == "Terpenuhi seluruhnya") {
    $poin_kb18 = 2;
} 

$poin_kb19 = 0;
if ($kb19 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb19 = 0;
} else if ($kb19 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb19 = 1;
} else if ($kb19 == "Terpenuhi seluruhnya") {
    $poin_kb19 = 2;
} 

$poin_kb20 = 0;
if ($kb20 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb20 = 0;
} else if ($kb20 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb20 = 1;
} else if ($kb20 == "Terpenuhi seluruhnya") {
    $poin_kb20 = 2;
} 

$poin_kb21 = 0;
if ($kb21 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb21 = 0;
} else if ($kb21 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb21 = 1;
} else if ($kb21 == "Terpenuhi seluruhnya") {
    $poin_kb21 = 2;
} 

$poin_kb22 = 0;
if ($kb22 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb22 = 0;
} else if ($kb22 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb22 = 1;
} else if ($kb22 == "Terpenuhi seluruhnya") {
    $poin_kb22 = 2;
} 

$poin_kb23 = 0;
if ($kb23 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kb23 = 0;
} else if ($kb23 == "Terpenuhi sebagian (<=85%)") {
    $poin_kb23 = 1;
} else if ($kb23 == "Terpenuhi seluruhnya") {
    $poin_kb23 = 2;
} 

$poin_kc1 = 0;
if ($kc1 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kc1 = 0;
} else if ($kc1 == "Terpenuhi sebagian (<=85%)") {
    $poin_kc1 = 1;
} else if ($kc1 == "Terpenuhi seluruhnya") {
    $poin_kc1 = 2;
}


$poin_kc3 = 0;
if ($kc3 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kc3 = 0;
} else if ($kc3 == "Terpenuhi sebagian (<=85%)") {
    $poin_kc3 = 1;
} else if ($kc3 == "Terpenuhi seluruhnya") {
    $poin_kc3 = 2;
} 

$poin_kc4 = 0;
if ($kc4 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kc4 = 0;
} else if ($kc4 == "Terpenuhi sebagian (<=85%)") {
    $poin_kc4 = 1;
}else if ($kc4 == "Terpenuhi seluruhnya") {
    $poin_kc4 = 2;
} 

$poin_kc5 = 0;
if ($kc5 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kc5 = 0;
} else if ($kc5 == "Terpenuhi sebagian (<=85%)") {
    $poin_kc5 = 1;
} else if ($kc5 == "Terpenuhi seluruhnya") {
    $poin_kc5 = 2;
} 

$poin_kc6 = 0;
if ($kc6 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kc6 = 0;
} else if ($kc6 == "Terpenuhi sebagian (<=85%)") {
    $poin_kc6 = 1;
} else if ($kc6 == "Terpenuhi seluruhnya") {
    $poin_kc6 = 2;
} 

$poin_kc7 = 0;
if ($kc7 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kc7 = 0;
} else if ($kc7 == "Terpenuhi sebagian (<=85%)") {
    $poin_kc7 = 1;
} else if ($kc7 == "Terpenuhi seluruhnya") {
    $poin_kc7 = 2;
} 

$poin_kc8 = 0;
if ($kc8 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kc8 = 0;
} else if ($kc8 == "Terpenuhi sebagian (<=85%)") {
    $poin_kc8 = 1;
} else if ($kc8 == "Terpenuhi seluruhnya") {
    $poin_kc8 = 2;
} 

$poin_kc9 = 0;
if ($kc9 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kc9 = 0;
} else if ($kc9 == "Terpenuhi sebagian (<=85%)") {
    $poin_kc9 = 1;
} else if ($kc9 == "Terpenuhi seluruhnya") {
    $poin_kc9 = 2;
} 

$poin_kd1 = 0;
if ($kd1 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kd1 = 0;
} else if ($kd1 == "Terpenuhi sebagian (<=85%)") {
    $poin_kd1 = 1;
} else if ($kd1 == "Terpenuhi seluruhnya") {
    $poin_kd1 = 2;
}

$poin_kc2 = 0;
if ($kd2 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kd2 = 0;
} else if ($kd2 == "Terpenuhi sebagian (<=85%)") {
    $poin_kd2 = 1;
} else if ($kd2 == "Terpenuhi seluruhnya") {
    $poin_kd2 = 2;
} 

$poin_kd3 = 0;
if ($kd3 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kd3 = 0;
} else if ($kd3 == "Terpenuhi sebagian (<=85%)") {
    $poin_kd3 = 1;
} else if ($kd3 == "Terpenuhi seluruhnya") {
    $poin_kd3 = 2;
} 

$poin_kd4 = 0;
if ($kd4 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kd4 = 0;
} else if ($kd4 == "Terpenuhi sebagian (<=85%)") {
    $poin_kd4 = 1;
} else if ($kd4 == "Terpenuhi seluruhnya") {
    $poin_kd4 = 2;
} 

$poin_kd5 = 0;
if ($kd5 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kd5 = 0;
} else if ($kd5 == "Terpenuhi sebagian (<=85%)") {
    $poin_kd5 = 1;
} else if ($kd5 == "Terpenuhi seluruhnya") {
    $poin_kd5 = 2;
} 

if ($ke1 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ke1 = 0;
} else if ($ke1 == "Terpenuhi sebagian (<=85%)") {
    $poin_ke1 = 1;
} else if ($ke1 == "Terpenuhi seluruhnya") {
    $poin_ke1 = 2;
}

// Calculate points for ke2
if ($ke2 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ke2 = 0;
} else if ($ke2 == "Terpenuhi sebagian (<=85%)") {
    $poin_ke2 = 1;
} else if ($ke2 == "Terpenuhi seluruhnya") {
    $poin_ke2 = 2;
}

// Calculate points for ke3
if ($ke3 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ke3 = 0;
} else if ($ke3 == "Terpenuhi sebagian (<=85%)") {
    $poin_ke3 = 1;
} else if ($ke3 == "Terpenuhi seluruhnya") {
    $poin_ke3 = 2;
}

// Calculate points for ke4
if ($ke4 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ke4 = 0;
} else if ($ke4 == "Terpenuhi sebagian (<=85%)") {
    $poin_ke4 = 1;
} else if ($ke4 == "Terpenuhi seluruhnya") {
    $poin_ke4 = 2;
}

// Calculate points for ke5
if ($ke5 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ke5 = 0;
} else if ($ke5 == "Terpenuhi sebagian (<=85%)") {
    $poin_ke5 = 1;
} else if ($ke5 == "Terpenuhi seluruhnya") {
    $poin_ke5 = 2;
}

if ($kf1 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kf1 = 0;
} else if ($kf1 == "Terpenuhi sebagian (<=85%)") {
    $poin_kf1 = 1;
} else if ($kf1 == "Terpenuhi seluruhnya") {
    $poin_kf1 = 2;
}

// Calculate points for kf2
if ($kf2 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kf2 = 0;
} else if ($kf2 == "Terpenuhi sebagian (<=85%)") {
    $poin_kf2 = 1;
} else if ($kf2 == "Terpenuhi seluruhnya") {
    $poin_kf2 = 2;
}

// Calculate points for kf3
if ($kf3 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kf3 = 0;
} else if ($kf3 == "Terpenuhi sebagian (<=85%)") {
    $poin_kf3 = 1;
} else if ($kf3 == "Terpenuhi seluruhnya") {
    $poin_kf3 = 2;
}

// Calculate points for kf4
if ($kf4 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kf4 = 0;
} else if ($kf4 == "Terpenuhi sebagian (<=85%)") {
    $poin_kf4 = 1;
} else if ($kf4 == "Terpenuhi seluruhnya") {
    $poin_kf4 = 2;
}

// Calculate points for kf5
if ($kf5 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kf5 = 0;
} else if ($kf5 == "Terpenuhi sebagian (<=85%)") {
    $poin_kf5 = 1;
} else if ($kf5 == "Terpenuhi seluruhnya") {
    $poin_kf5 = 2;
}

if ($kg1 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kg1 = 0;
} else if ($kg1 == "Terpenuhi sebagian (<=85%)") {
    $poin_kg1 = 1;
} else if ($kg1 == "Terpenuhi seluruhnya") {
    $poin_kg1 = 2;
}

// Calculate points for kg2
if ($kg2 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kg2 = 0;
} else if ($kg2 == "Terpenuhi sebagian (<=85%)") {
    $poin_kg2 = 1;
} else if ($kg2 == "Terpenuhi seluruhnya") {
    $poin_kg2 = 2;
}

// Calculate points for kg3
if ($kg3 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kg3 = 0;
} else if ($kg3 == "Terpenuhi sebagian (<=85%)") {
    $poin_kg3 = 1;
} else if ($kg3 == "Terpenuhi seluruhnya") {
    $poin_kg3 = 2;
}

if ($kh1 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kh1 = 0;
} else if ($kh1 == "Terpenuhi sebagian (<=85%)") {
    $poin_kh1 = 1;
} else if ($kh1 == "Terpenuhi seluruhnya") {
    $poin_kh1 = 2;
}

// Calculate points for kh2
if ($kh2 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kh2 = 0;
} else if ($kh2 == "Terpenuhi sebagian (<=85%)") {
    $poin_kh2 = 1;
} else if ($kh2 == "Terpenuhi seluruhnya") {
    $poin_kh2 = 2;
}

$poin_ki1 = 0;
if ($ki1 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ki1 = 0;
} else if ($ki1 == "Terpenuhi sebagian (<=85%)") {
    $poin_ki1 = 1;
} else if ($ki1 == "Terpenuhi seluruhnya") {
    $poin_ki1 = 2;
}

$poin_ki2 = 0;
if ($ki2 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ki2 = 0;
} else if ($ki2 == "Terpenuhi sebagian (<=85%)") {
    $poin_ki2 = 1;
} else if ($ki2 == "Terpenuhi seluruhnya") {
    $poin_ki2 = 2;
} 

$poin_ki3 = 0;
if ($ki3 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ki3 = 0;
} else if ($ki3 == "Terpenuhi sebagian (<=85%)") {
    $poin_ki3 = 1;
} else if ($ki3 == "Terpenuhi seluruhnya") {
    $poin_ki3 = 2;
} 

$poin_ki4 = 0;
if ($ki4 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ki4 = 0;
} else if ($ki4 == "Terpenuhi sebagian (<=85%)") {
    $poin_ki4 = 1;
} else if ($ki4 == "Terpenuhi seluruhnya") {
    $poin_ki4 = 2;
} 

$poin_ki5 = 0;
if ($ki5 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ki5 = 0;
} else if ($ki5 == "Terpenuhi sebagian (<=85%)") {
    $poin_ki5 = 1;
} else if ($ki5 == "Terpenuhi seluruhnya") {
    $poin_ki5 = 2;
} 

$poin_ki6 = 0;
if ($ki6 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ki6 = 0;
} else if ($ki6 == "Terpenuhi sebagian (<=85%)") {
    $poin_ki6 = 1;
} else if ($ki6 == "Terpenuhi seluruhnya") {
    $poin_ki6 = 2;
} 

$poin_ki7 = 0;
if ($ki7 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_ki7 = 0;
} else if ($ki7 == "Terpenuhi sebagian (<=85%)") {
    $poin_ki7 = 1;
} else if ($ki7 == "Terpenuhi seluruhnya") {
    $poin_ki7 = 2;
} 

$poin_kc2 = 0;
if ($kc2 == "Tidak ada bukti/Tidak Terpenuhi") {
    $poin_kc2 = 0;
} else if ($kc2 == "Terpenuhi sebagian (<=85%)") {
    $poin_kc2 = 1;
} else if ($kc2 == "Terpenuhi seluruhnya") {
    $poin_kc2 = 2;
}

$totalka = ($poin_ka1 + $poin_ka2 + $poin_ka3 + $poin_ka4 + $poin_ka5 + $poin_ka6);

$totalkb = ($poin_kb1 + $poin_kb2 + $poin_kb3 + $poin_kb4 + $poin_kb5 + $poin_kb6 +
$poin_kb7 + $poin_kb8 + $poin_kb9 + $poin_kb10 + $poin_kb11 + $poin_kb12 + $poin_kb13 + $poin_kb14 + $poin_kb15 + $poin_kb16 + $poin_kb17 + $poin_kb18 + 
$poin_kb19 + $poin_kb20 + $poin_kb21 + $poin_kb22 + $poin_kb23);

$totalkc = ($poin_kc1 + $poin_kc2 + $poin_kc3 + $poin_kc4 + $poin_kc5 + $poin_kc6 + $poin_kc7 + $poin_kc8 + $poin_kc9);

$totalkd = ($poin_kd1 + $poin_kd2 + $poin_kd3 + $poin_kd4 + $poin_kd5);

$totalke = ($poin_ke1 + $poin_ke2 + $poin_ke3 + $poin_ke4 + $poin_ke5);

$totalkf = ($poin_kf1 + $poin_kf2 + $poin_kf3 + $poin_kf4 + $poin_kf5);

$totalkg = ($poin_kg1 + $poin_kg2 + $poin_kg3);

$totalkh = ($poin_kh1 + $poin_kh2);

$totalki = ($poin_ki1 + $poin_ki2 + $poin_ki3 + $poin_ki4 + $poin_ki5 + $poin_ki6 +
$poin_ki7);

$totalka_akhir = ($totalka)*0.1;
$totalkb_akhir = ($totalkb)*0.3;
$totalkc_akhir = ($totalkc)*0.1;
$totalkd_akhir = ($totalkd)*0.15;
$totalke_akhir = ($totalke)*0.15;
$totalkf_akhir = ($totalkf)*0.15;
$totalkg_akhir = ($totalkg)*0.15;
$totalkh_akhir = ($totalkh)*0.15;
$totalki_akhir = ($totalki)*0.2;


// Calculate total points
$total_points = ($poin_ka1 + $poin_ka2 + $poin_ka3 + $poin_ka4 + $poin_ka5 + $poin_ka6 + $poin_kb1 + $poin_kb2 + $poin_kb3 + $poin_kb4 + $poin_kb5 + $poin_kb6 +
$poin_kb7 + $poin_kb8 + $poin_kb9 + $poin_kb10 + $poin_kb11 + $poin_kb12 + $poin_kb13 + $poin_kb14 + $poin_kb15 + $poin_kb16 + $poin_kb17 + $poin_kb18 + 
$poin_kb19 + $poin_kb20 + $poin_kb21 + $poin_kb22 + $poin_kb23 + $poin_kc1 + $poin_kc2 + $poin_kc3 + $poin_kc4 + $poin_kc5 + $poin_kc6 +
$poin_kc7 + $poin_kc8 + $poin_kc9 + $poin_kd1 + $poin_kd2 + $poin_kd3 + $poin_kd4 + $poin_kd5 + $poin_ke1 + $poin_ke2 + $poin_ke3 + $poin_ke4 + $poin_ke5 + $poin_kf1 + $poin_kf2 + $poin_kf3 + $poin_kf4 + $poin_kf5
+ $poin_kg1 + $poin_kg2 + $poin_kg3 + $poin_kh1 + $poin_kh2+ $poin_ki1 + $poin_ki2 + $poin_ki3 + $poin_ki4 + $poin_ki5 + $poin_ki6 +
$poin_ki7);

$total_akhir = ($totalka_akhir+$totalkb_akhir +$totalkc_akhir +$totalkd_akhir +$totalke_akhir +$totalkf_akhir + $totalkg_akhir +$totalkh_akhir +$totalki_akhir);



// Update the database with the calculated points
mysqli_query($koneksi, "UPDATE tabel_p_kepsek SET
    ka1='$ka1', ka2='$ka2', ka3='$ka3', ka4='$ka4', ka5='$ka5', ka6='$ka6', kb1='$kb1', kb2='$kb2', kb3='$kb3', kb4='$kb4', kb5='$kb5', kb6='$kb6',
    kb7='$kb7', kb8='$kb8', kb9='$kb9', kb10='$kb10', kb11='$kb11', kb12='$kb12', kb13='$kb13', kb14='$kb14', kb15='$kb15', kb16='$kb16', kb17='$kb17', kb18='$kb18',
    kb19='$kb19', kb20='$kb20', kb21='$kb21', kb22='$kb22', kb23='$kb23',kc1='$kb1', kc2='$kc2', kc3='$kc3', kc4='$kc4', kc5='$kb5', kc6='$kc6',
    kc7='$kc7', kc8='$kc8', kc9='$kc9',kd1='$kd1', kd2='$kd2', kd3='$kd3', kd4='$kd4', kd5='$kd5',ke1='$ke1', ke2='$ke2', ke3='$ke3', ke4='$ke4', ke5='$ke5',
    kf1='$kf1', kf2='$kf2', kf3='$kf3', kf4='$kf4', kf5='$kf5',kg1='$kg1', kg2='$kg2', kg3='$kg3',kh1='$kh1', kh2='$kh2',ki1='$ki1', ki2='$ki2', ki3='$ki3', ki4='$ki4', ki5='$ki5', ki6='$ki6',
    ki7='$ki7',
    poinka1='$poin_ka1',poinka2='$poin_ka2',poinka3='$poin_ka3',poinka4='$poin_ka4',poinka5='$poin_ka5',poinka6='$poin_ka6',
    poinkb1='$poin_kb1',poinkb2='$poin_kb2',poinkb3='$poin_kb3',poinkb4='$poin_kb4',poinkb5='$poin_kb5',poinkb6='$poin_kb6',
    poinkb7='$poin_kb7',poinkb8='$poin_kb8',poinkb9='$poin_kb9',poinkb10='$poin_kb10',poinkb11='$poin_kb11',poinkb12='$poin_kb12',
    poinkb13='$poin_kb13',poinkb14='$poin_kb14',poinkb15='$poin_kb15',poinkb16='$poin_kb16',poinkb17='$poin_kb17',poinkb18='$poin_kb18',
    poinkb19='$poin_kb19',poinkb20='$poin_kb20',poinkb21='$poin_kb21',poinkb22='$poin_kb22',poinkb23='$poin_kb23',
    poinkc1='$poin_kc1',poinkc2='$poin_kc2',poinkc3='$poin_kc3',poinkc5='$poin_kc5',poinkc6='$poin_kc6',
    poinkc7='$poin_kc7',poinkc8='$poin_kc8',poinkc9='$poin_kc9',poinkd1='$poin_kd1',poinkd2='$poin_kd2',poinkd3='$poin_kd3',poinkd4='$poin_kd4',poinkd5='$poin_kd5',
    poinke1='$poin_ke1',poinke2='$poin_ke2',poinke3='$poin_ke3',poinke4='$poin_ke4',poinke5='$poin_ke5',poinkf1='$poin_kf1',poinkf2='$poin_kf2',poinkf3='$poin_kf3',poinkf4='$poin_kf4',poinkf5='$poin_kf5',
    poinkg1='$poin_kg1',poinkg2='$poin_kg2',poinkg3='$poin_kg3',poinkh1='$poin_kh1',poinkh2='$poin_kh2',poinki1='$poin_ki1',poinki2='$poin_ki2',poinki3='$poin_ki3',poinki4='$poin_ki4',poinki5='$poin_ki5',poinki6='$poin_ki6',
    poinki7='$poin_ki7',poinkc4='$poin_kc4',
    totalka='$totalka',totalkb='$totalkb',totalkc='$totalkc',totalkd='$totalkd',totalke='$totalke',totalkf='$totalkf',totalkg='$totalkg',totalkh='$totalkh',totalki='$totalki',
    total_penilaian_kepsek='$total_points',totalakhir='$total_akhir',tahun_penilaian='$tahun_penilaian',catatan_kepsek='$catatan_kepsek',totalkaakhir='$totalka_akhir',totalkbakhir='$totalkb_akhir',totalkcakhir='$totalkc_akhir',totalkdakhir='$totalkd_akhir',totalkeakhir='$totalke_akhir'
    ,totalkfakhir='$totalkf_akhir',totalkgakhir='$totalkg_akhir',totalkhakhir='$totalkh_akhir',totalkiakhir='$totalki_akhir'
    WHERE id='$id' AND id_penilaian='$id_penilaian'");




// Redirect back to the main page
header("location: page_beri_nilai_kepsek.php");
?>