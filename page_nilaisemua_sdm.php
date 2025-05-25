<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman dengan 2 Container</title>
  <style>
    /* Global styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: sans-serif;
      background-color: #f5f5f5;
    }

    /* Navigation bar styles */
    .navbar-sdm {
      background-color: #2980b9;  /* Updated color for a more vibrant blue */
      color: white;
      text-align: center;
      padding: 10px 0;
    }

    .navbar-sdm a {
      display: inline-block;
      padding: 14px 16px;
      text-decoration: none;
      color: inherit; /* Inherit color from navbar background */
    }

    .navbar-sdm a:hover {
      background-color: #3498db; /* Updated hover color for a darker blue */
      color: white;
    }

    /* Container styles */
    .container {
      width: 300px;
      margin: 20px auto;
      padding: 20px;
      border-radius: 10px;
      background-color: #fff; /* Updated background color to white */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: all 0.2s ease-in-out;
    }

    .container a {
      text-decoration: none;
      color: #444;
    }

    .container h2 {
      margin-top: 0;
      margin-bottom: 10px;
    }

    .container p {
      font-size: 16px;
      line-height: 1.5;
    }

    .container:hover {
      background-color: #f1f1f1;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>
  <div class="navbar-sdm">
    <a href="page_sdm.php">Home</a>
    <a href="page_profil_sdm.php">Profil</a>
    <a href="page_beri_nilai_sdm.php">Nilai SDM</a>
    <a href="page_laporan_kinerja_guru_sdm.php">Laporan Kinerja Guru</a>
    <a href="page_jenjang_sdm.php">Jenjang</a>
    <a href="page_nilaisemua_sdm.php">Cek Nilai </a>
    <a href="logout.php">Logout</a>
  </div>
  <div class="container">
    <a href="page_jenjang_sdm.php">
      <h2>Nilai SDM</h2>
      <p>Klik untuk menuju halaman 1</p>
    </a>
  </div>
  <div class="container">
    <a href="page_jenjang_pendidikan.php">
      <h2>Nilai Pendidikan</h2>
      <p>Klik untuk menuju halaman 2</p>
    </a>
  </div>
    </a>
  </div>
</body>
</html>
