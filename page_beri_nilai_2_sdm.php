<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beri nilai sdm2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Custom CSS */
        html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    background: url('bgnusput.jpg') no-repeat center center fixed;
    background-size: 100% 100%; /* Mengatur ukuran latar belakang sesuai halaman */
    background-position: center center;
    font-family: Arial, sans-serif;
}

.navbar-sdm {
            background-color: #3498db;
            overflow: hidden;
            text-align: center;
            padding: 10px 0;
        }

        .navbar-sdm .navbar-nav {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%; /* Ensure full width for centered text */
}

.navbar-sdm .navbar-nav .nav-link {
    color: white;
    text-decoration: none;
    padding: 14px 16px;
}

.navbar-sdm .navbar-nav .nav-link:hover {
    background-color: #ddd;
    color: black;
}
        .content-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        h1 {
            color: #3498db;
        }

        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
        }

        .btn-primary:hover {
            background-color: #f8b739;
            border-color: #f8b739;
        }
        .container hr {
            border-top: 2px solid #3498db; /* Atur warna dan ketebalan garis sesuai kebutuhan */
        }
    </style>
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-sdm text-center">
    <div class="container">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-sdm navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="page_sdm.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page_profil_sdm.php">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page_beri_nilai_sdm.php">Nilai SDM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page_laporan_kinerja_guru_sdm.php">Laporan Kinerja Guru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page_jenjang_sdm.php">Jenjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page_nilaisemua_sdm.php">Cek Nilai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container content-container">
        <?php
	include 'koneksi.php';
	$id = $_GET['id'];
  $id_penilaian = $_GET['id_penilaian'];
	$data = mysqli_query($koneksi,"SELECT * from tabel_p_sdm where id='$id' and id_penilaian = '$id_penilaian'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="proses_nilai_sdm.php">
		
<div class="container">
  <h1>Nilai SDM</h1>

  <div class="form-group">
      <label for="id">ID Guru:</label>
      <input type="text" class="form-control" id="id" name="id" value="<?php echo $d['id'];?>" readonly>
    </div> 
    <div class="form-group">
      <label for="id_penilaian">ID penilaian:</label>
      <input type="text" class="form-control" id="id_penilaian" name="id_penilaian" value="<?php echo $d['id_penilaian'];?>" readonly>
    </div> 

    <div class="form-group">
      <label for="nama">Nama Guru:</label>
      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $d['nama'];?>" readonly>
    </div> 

    <h4>1. Bulan Juli :</h4>

  <div class="form-group">
      <label for="sa1">Absensi:</label>
      <select class="form-control" id="sa1" name="sa1">
        <option value="0">terlambat lebih dari 5x</option>
        <option value="1" >terlambat kurang dari sama dengan 5</option>
        <option value="2" >tidak pernah terlambat</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sa2">Pemakaian seragam:</label>
      <select class="form-control" id="sa2" name="sa2">
        <option value="0" >tidak menggunakan seragam lebih dari 5x </option>
        <option value="1" >tidak menggunakan seragam kurang dari sama dengan 5x </option>
        <option value="2" > selalu menggunakan seragam</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sa3">Pemakaian buku ijin:</label>
      <select class="form-control" id="sa3" name="sa3">
        <option value="0" >tidak pernah ijin ke SDM pada saat meninggalkan tempat kerja</option>
        <option value="1" >ijin ke SDM tetapi tidak selalu</option>
        <option value="2" >selalu ijin ke SDM pada saat meninggalkan tempat kerja</option>
      </select>
    </div> 
    <div class="form-group">
      <label for="sa4">Ijin Pribadi:</label>
      <select class="form-control" id="sa4" name="sa4">
        <option value="0" >ijin > 3 hari</option>
        <option value="1" >ijin <= 3 hari</option>
        <option value="2" >tidak pernah ijin</option>
      </select>
    </div>
   

    <h4>2. Bulan Agustus :</h4>

  <div class="form-group">
      <label for="sb1">Absensi:</label>
      <select class="form-control" id="sb1" name="sb1">
      <option value="0">terlambat lebih dari 5x</option>
        <option value="1" >terlambat kurang dari sama dengan 5</option>
        <option value="2" >tidak pernah terlambat</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sb2">Pemakaian seragam:</label>
      <select class="form-control" id="sb2" name="sb2">
      <option value="0" >tidak menggunakan seragam lebih dari 5x </option>
        <option value="1" >tidak menggunakan seragam kurang dari sama dengan 5x </option>
        <option value="2" > selalu menggunakan seragam</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sb3">Pemakaian buku ijin:</label>
      <select class="form-control" id="sb3" name="sb3">
      <option value="0" >tidak pernah ijin ke SDM pada saat meninggalkan tempat kerja</option>
        <option value="1" >ijin ke SDM tetapi tidak selalu</option>
        <option value="2" >selalu ijin ke SDM pada saat meninggalkan tempat kerja</option>
      </select>
    </div> 
    <div class="form-group">
      <label for="sb4">Ijin Pribadi:</label>
      <select class="form-control" id="sb4" name="sb4">
      <option value="0" >ijin > 3 hari</option>
        <option value="1" >ijin <= 3 hari</option>
        <option value="2" >tidak pernah ijin</option>
      </select>
    </div>
    
   
    <h4>3. Bulan September :</h4>

  <div class="form-group">
      <label for="sc1">Absensi:</label>
      <select class="form-control" id="sc1" name="sc1">
      <option value="0">terlambat lebih dari 5x</option>
        <option value="1" >terlambat kurang dari sama dengan 5</option>
        <option value="2" >tidak pernah terlambat</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sc2">Pemakaian seragam:</label>
      <select class="form-control" id="sc2" name="sc2">
      <option value="0" >tidak menggunakan seragam lebih dari 5x </option>
        <option value="1" >tidak menggunakan seragam kurang dari sama dengan 5x </option>
        <option value="2" > selalu menggunakan seragam</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sc3">Pemakaian buku ijin:</label>
      <select class="form-control" id="sc3" name="sc3">
      <option value="0" >tidak pernah ijin ke SDM pada saat meninggalkan tempat kerja</option>
        <option value="1" >ijin ke SDM tetapi tidak selalu</option>
        <option value="2" >selalu ijin ke SDM pada saat meninggalkan tempat kerja</option>
      </select>
    </div> 
    <div class="form-group">
      <label for="sc4">Ijin Pribadi:</label>
      <select class="form-control" id="sc4" name="sc4">
      <option value="0" >ijin > 3 hari</option>
        <option value="1" >ijin <= 3 hari</option>
        <option value="2" >tidak pernah ijin</option>
      </select>
    </div>
    

    <h4>4. Bulan Oktober :</h4>

  <div class="form-group">
      <label for="sd1">Absensi:</label>
      <select class="form-control" id="sd1" name="sd1">
      <option value="0">terlambat lebih dari 5x</option>
        <option value="1" >terlambat kurang dari sama dengan 5</option>
        <option value="2" >tidak pernah terlambat</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sd2">Pemakaian seragam:</label>
      <select class="form-control" id="sd2" name="sd2">
      <option value="0" >tidak menggunakan seragam lebih dari 5x </option>
        <option value="1" >tidak menggunakan seragam kurang dari sama dengan 5x </option>
        <option value="2" > selalu menggunakan seragam</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sd3">Pemakaian buku ijin:</label>
      <select class="form-control" id="sd3" name="sd3">
      <option value="0" >tidak pernah ijin ke SDM pada saat meninggalkan tempat kerja</option>
        <option value="1" >ijin ke SDM tetapi tidak selalu</option>
        <option value="2" >selalu ijin ke SDM pada saat meninggalkan tempat kerja</option>
      </select>
    </div> 
    <div class="form-group">
      <label for="sd4">Ijin Pribadi:</label>
      <select class="form-control" id="sd4" name="sd4">
      <option value="0" >ijin > 3 hari</option>
        <option value="1" >ijin <= 3 hari</option>
        <option value="2" >tidak pernah ijin</option>
      </select>
    </div>
   
   
    <h4>5. Bulan November:</h4>

  <div class="form-group">
      <label for="se1">Absensi:</label>
      <select class="form-control" id="se1" name="se1">
      <option value="0">terlambat lebih dari 5x</option>
        <option value="1" >terlambat kurang dari sama dengan 5</option>
        <option value="2" >tidak pernah terlambat</option>
      </select>
    </div>
    <div class="form-group">
      <label for="se2">Pemakaian seragam:</label>
      <select class="form-control" id="se2" name="se2">
      <option value="0" >tidak menggunakan seragam lebih dari 5x </option>
        <option value="1" >tidak menggunakan seragam kurang dari sama dengan 5x </option>
        <option value="2" > selalu menggunakan seragam</option>
      </select>
    </div>
    <div class="form-group">
      <label for="se3">Pemakaian buku ijin:</label>
      <select class="form-control" id="se3" name="se3">
      <option value="0" >tidak pernah ijin ke SDM pada saat meninggalkan tempat kerja</option>
        <option value="1" >ijin ke SDM tetapi tidak selalu</option>
        <option value="2" >selalu ijin ke SDM pada saat meninggalkan tempat kerja</option>
      </select>
    </div> 
    <div class="form-group">
      <label for="se4">Ijin Pribadi:</label>
      <select class="form-control" id="se4" name="se4">
      <option value="0" >ijin > 3 hari</option>
        <option value="1" >ijin <= 3 hari</option>
        <option value="2" >tidak pernah ijin</option>
      </select>
    </div>
    

    <h4>6. Bulan Desember :</h4>

  <div class="form-group">
      <label for="sf1">Absensi:</label>
      <select class="form-control" id="sf1" name="sf1">
      <option value="0">terlambat lebih dari 5x</option>
        <option value="1" >terlambat kurang dari sama dengan 5</option>
        <option value="2" >tidak pernah terlambat</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sf2">Pemakaian seragam:</label>
      <select class="form-control" id="sf2" name="sf2">
      <option value="0" >tidak menggunakan seragam lebih dari 5x </option>
        <option value="1" >tidak menggunakan seragam kurang dari sama dengan 5x </option>
        <option value="2" > selalu menggunakan seragam</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sf3">Pemakaian buku ijin:</label>
      <select class="form-control" id="sf3" name="sf3">
      <option value="0" >tidak pernah ijin ke SDM pada saat meninggalkan tempat kerja</option>
        <option value="1" >ijin ke SDM tetapi tidak selalu</option>
        <option value="2" >selalu ijin ke SDM pada saat meninggalkan tempat kerja</option>
      </select>
    </div> 
    <div class="form-group">
      <label for="sf4">Ijin Pribadi:</label>
      <select class="form-control" id="sf4" name="sf4">
      <option value="0" >ijin > 3 hari</option>
        <option value="1" >ijin <= 3 hari</option>
        <option value="2" >tidak pernah ijin</option>
      </select>
    </div>
    

    <h4>7. Bulan Januari :</h4>

  <div class="form-group">
      <label for="sg1">Absensi:</label>
      <select class="form-control" id="sg1" name="sg1">
      <option value="0">terlambat lebih dari 5x</option>
        <option value="1" >terlambat kurang dari sama dengan 5</option>
        <option value="2" >tidak pernah terlambat</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sg2">Pemakaian seragam:</label>
      <select class="form-control" id="sg2" name="sg2">
      <option value="0" >tidak menggunakan seragam lebih dari 5x </option>
        <option value="1" >tidak menggunakan seragam kurang dari sama dengan 5x </option>
        <option value="2" > selalu menggunakan seragam</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sg3">Pemakaian buku ijin:</label>
      <select class="form-control" id="sg3" name="sg3">
      <option value="0" >tidak pernah ijin ke SDM pada saat meninggalkan tempat kerja</option>
        <option value="1" >ijin ke SDM tetapi tidak selalu</option>
        <option value="2" >selalu ijin ke SDM pada saat meninggalkan tempat kerja</option>
      </select>
    </div> 
    <div class="form-group">
      <label for="sg4">Ijin Pribadi:</label>
      <select class="form-control" id="sg4" name="sg4">
      <option value="0" >ijin > 3 hari</option>
        <option value="1" >ijin <= 3 hari</option>
        <option value="2" >tidak pernah ijin</option>
      </select>
    </div>
    

    <h4>8. Bulan Februari :</h4>

  <div class="form-group">
      <label for="sh1">Absensi:</label>
      <select class="form-control" id="sh1" name="sh1">
      <option value="0">terlambat lebih dari 5x</option>
        <option value="1" >terlambat kurang dari sama dengan 5</option>
        <option value="2" >tidak pernah terlambat</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sh2">Pemakaian seragam:</label>
      <select class="form-control" id="sh2" name="sh2">
      <option value="0" >tidak menggunakan seragam lebih dari 5x </option>
        <option value="1" >tidak menggunakan seragam kurang dari sama dengan 5x </option>
        <option value="2" > selalu menggunakan seragam</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sh3">Pemakaian buku ijin:</label>
      <select class="form-control" id="sh3" name="sh3">
      <option value="0" >tidak pernah ijin ke SDM pada saat meninggalkan tempat kerja</option>
        <option value="1" >ijin ke SDM tetapi tidak selalu</option>
        <option value="2" >selalu ijin ke SDM pada saat meninggalkan tempat kerja</option>
      </select>
    </div> 
    <div class="form-group">
      <label for="sh4">Ijin Pribadi:</label>
      <select class="form-control" id="sh4" name="sh4">
      <option value="0" >ijin > 3 hari</option>
        <option value="1" >ijin <= 3 hari</option>
        <option value="2" >tidak pernah ijin</option>
      </select>
    </div>
    

    <h4>9. Bulan Maret :</h4>

    <div class="form-group">
    <label for="si1">Absensi:</label>
    <select class="form-control" id="si1" name="si1">
    <option value="0">terlambat lebih dari 5x</option>
        <option value="1" >terlambat kurang dari sama dengan 5</option>
        <option value="2" >tidak pernah terlambat</option>
    </select>
  </div>
  <div class="form-group">
    <label for="si2">Pemakaian seragam:</label>
    <select class="form-control" id="si2" name="si2">
    <option value="0" >tidak menggunakan seragam lebih dari 5x </option>
        <option value="1" >tidak menggunakan seragam kurang dari sama dengan 5x </option>
        <option value="2" > selalu menggunakan seragam</option>
    </select>
  </div>
  <div class="form-group">
    <label for="si3">Pemakaian buku ijin:</label>
    <select class="form-control" id="si3" name="si3">
    <option value="0" >tidak pernah ijin ke SDM pada saat meninggalkan tempat kerja</option>
        <option value="1" >ijin ke SDM tetapi tidak selalu</option>
        <option value="2" >selalu ijin ke SDM pada saat meninggalkan tempat kerja</option>
    </select>
  </div> 
  <div class="form-group">
    <label for="si4">Ijin Pribadi:</label>
    <select class="form-control" id="si4" name="si4">
    <option value="0" >ijin > 3 hari</option>
        <option value="1" >ijin <= 3 hari</option>
        <option value="2" >tidak pernah ijin</option>
    </select>
  </div>
  

  <h4>10. Bulan April :</h4>

    <div class="form-group">
    <label for="sj1">Absensi:</label>
    <select class="form-control" id="sj1" name="sj1">
    <option value="0">terlambat lebih dari 5x</option>
        <option value="1" >terlambat kurang dari sama dengan 5</option>
        <option value="2" >tidak pernah terlambat</option>
    </select>
  </div>
  <div class="form-group">
    <label for="sj2">Pemakaian seragam:</label>
    <select class="form-control" id="sj2" name="sj2">
    <option value="0" >tidak menggunakan seragam lebih dari 5x </option>
        <option value="1" >tidak menggunakan seragam kurang dari sama dengan 5x </option>
        <option value="2" > selalu menggunakan seragam</option>
    </select>
  </div>
  <div class="form-group">
    <label for="sj3">Pemakaian buku ijin:</label>
    <select class="form-control" id="sj3" name="sj3">
    <option value="0" >tidak pernah ijin ke SDM pada saat meninggalkan tempat kerja</option>
        <option value="1" >ijin ke SDM tetapi tidak selalu</option>
        <option value="2" >selalu ijin ke SDM pada saat meninggalkan tempat kerja</option>
    </select>
  </div> 
  <div class="form-group">
    <label for="sj4">Ijin Pribadi:</label>
    <select class="form-control" id="sj4" name="sj4">
    <option value="0" >ijin > 3 hari</option>
        <option value="1" >ijin <= 3 hari</option>
        <option value="2" >tidak pernah ijin</option>
    </select>
  </div>
  
  <h4>11. Bulan Mei :</h4>

<div class="form-group">
    <label for="sk1">Absensi:</label>
    <select class="form-control" id="sk1" name="sk1">
    <option value="0">terlambat lebih dari 5x</option>
        <option value="1" >terlambat kurang dari sama dengan 5</option>
        <option value="2" >tidak pernah terlambat</option>
    </select>
  </div>
  <div class="form-group">
    <label for="sk2">Pemakaian seragam:</label>
    <select class="form-control" id="sk2" name="sk2">
    <option value="0" >tidak menggunakan seragam lebih dari 5x </option>
        <option value="1" >tidak menggunakan seragam kurang dari sama dengan 5x </option>
        <option value="2" > selalu menggunakan seragam</option>
    </select>
  </div>
  <div class="form-group">
    <label for="sk3">Pemakaian buku ijin:</label>
    <select class="form-control" id="sk3" name="sk3">
    <option value="0" >tidak pernah ijin ke SDM pada saat meninggalkan tempat kerja</option>
        <option value="1" >ijin ke SDM tetapi tidak selalu</option>
        <option value="2" >selalu ijin ke SDM pada saat meninggalkan tempat kerja</option>
    </select>
  </div> 
  <div class="form-group">
    <label for="sk4">Ijin Pribadi:</label>
    <select class="form-control" id="sk4" name="sk4">
    <option value="0" >ijin > 3 hari</option>
        <option value="1" >ijin <= 3 hari</option>
        <option value="2" >tidak pernah ijin</option>
    </select>
  </div>
  

  <h4>12. Bulan Juni :</h4>

<div class="form-group">
    <label for="sl1">Absensi:</label>
    <select class="form-control" id="sl1" name="sl1">
    <option value="0">terlambat lebih dari 5x</option>
        <option value="1" >terlambat kurang dari sama dengan 5</option>
        <option value="2" >tidak pernah terlambat</option>
    </select>
  </div>
  <div class="form-group">
    <label for="sl2">Pemakaian seragam:</label>
    <select class="form-control" id="sl2" name="sl2">
    <option value="0" >tidak menggunakan seragam lebih dari 5x </option>
        <option value="1" >tidak menggunakan seragam kurang dari sama dengan 5x </option>
        <option value="2" > selalu menggunakan seragam</option>
    </select>
  </div>
  <div class="form-group">
    <label for="sl3">Pemakaian buku ijin:</label>
    <select class="form-control" id="sl3" name="sl3">
    <option value="0" >tidak pernah ijin ke SDM pada saat meninggalkan tempat kerja</option>
        <option value="1" >ijin ke SDM tetapi tidak selalu</option>
        <option value="2" >selalu ijin ke SDM pada saat meninggalkan tempat kerja</option>
    </select>
  </div> 
  <div class="form-group">
    <label for="sl4">Ijin Pribadi:</label>
    <select class="form-control" id="sl4" name="sl4">
    <option value="0" >ijin > 3 hari</option>
        <option value="1" >ijin <= 3 hari</option>
        <option value="2" >tidak pernah ijin</option>
    </select>
  </div>
  <hr>
  <div class="form-group">
    <label for="sl5">Apresiasi:</label>
    <select class="form-control" id="sl5" name="sl5">
      <option value="0" >tidak mendapat apresiasi</option>
      <option value="1" >mendapat >= 2 kali apresiasi
</option>
      <option value="2" >mendapat apresiasi tahunan</option>
    </select>
  </div>

  <div class="form-group">
      <label for="tahun_penilaian">Tahun penilaian:</label>
      <input type="number" class="form-control" id="tahun_penilaian" name="tahun_penilaian" value="<?php echo $d['tahun_penilaian'];?>" min="2023" max="2030" >
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
<?php 
	}
	?>
</div>
</body>
</html>
	
