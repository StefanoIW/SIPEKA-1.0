<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page SDM</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: url('bgnusput.jpg') no-repeat center center fixed;
            background-size: 100% 100%;
            background-position: center center;
            font-family: Arial, sans-serif;
        }

        .navbar-sdm {
            background-color: #3498db;
            border: 1px solid #2978a0;
            padding: 10px 0;
            text-align: center;
        }

        .navbar-sdm a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar-sdm a:hover {
            background-color: #ddd;
            color: black;
        }

        .welcome-container {
            background-color: #3498db;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            margin: 100px auto;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .logo {
            display: block;
            width: 200px;
            height: auto;
            margin-bottom: 20px;
        }
        .welcome-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .welcome-box h1 {
            font-size: 50px;
            color: #3498db;
            margin-bottom: 20px;
        }
        .sipeka-text {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            font-size: 24px;
            border-radius: 5px;
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
    
    <div class="welcome-box">
        <h1>Selamat Datang</h1>
        <div class="sipeka-text">SI-PEKA</div>
    </div>
</body>
</html>
