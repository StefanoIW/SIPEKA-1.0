<!DOCTYPE html>
    <html>
    <head>
        <title>Login - Sekolah Nusaputra</title>
        <link rel="stylesheet" type="text/css" href="stylelogin.css">
        <style>
            /* Global Styles */
            html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    background: url('bgnusput.jpg') no-repeat center center fixed;
    background-size: 100% 100%; /* Mengatur ukuran latar belakang sesuai halaman */
    background-position: center center;
    font-family: Arial, sans-serif;
}

            .tulisan_login {
                text-align: center;
            }
            /* Add a new style for the red-text class */
            .tulisan_perintah {
                 color: #f00; /* Red color */
                
            }

            .container {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 90vh; /* Perbesar kontainer */
            }

            /* Header and Logo */
            .logo {
            display: block;
            width: 200px;
            height: auto;
            margin-bottom: 20px;
        }
            h1 {
                text-align: center;
                color: #428bca; /* Ubah warna teks menjadi biru */
                font-size: 50px;
                margin: 0;
            }

            /* Login Form Container */
            .kotak_login {
        background: rgba(255, 255, 255, 0.9); /* Menggunakan latar belakang putih transparan */
        padding: 30px; /* Lebih banyak padding untuk ruang yang lebih luas */
        border-radius: 10px;
        box-shadow: 0 0 15px 0 rgba(66, 139, 202, 0.5); /* Menggunakan warna bayangan yang lebih lembut */
    }

            label {
                display: block;
                margin-top: 10px;
            }

            .form_login {
                width: 90%;
                padding: 10px;
                margin-top: 5px;
                border: 1px solid #ccc;
                border-radius: 5px; /* Lebih besar radius border */
            }

            .tombol_login {
                background: #428bca;
                color: #fff;
                padding: 10px;
                border: none;
                width: 100%;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 10px;
                transition: background-color 0.3s; /* Efek transisi warna latar belakang */
            }

            .tombol_login:hover {
                background: #357abf; /* Warna latar belakang saat dihover */
            }

            .alert {
                background: #f44336;
                color: #fff;
                padding: 10px;
                text-align: center;
                border-radius: 5px;
                margin-top: 10px;
            }

            /* Modal Styles */
            .modal-dialog {
                text-align: center;
            }

            .loginmodal-container {
                background: #fff;
                width: 300px;
                padding: 15px;
                border-radius: 10px;
                box-shadow: 0px 0px 15px 0px #428bca;
                margin: 0 auto;
                margin-top: 20px;
            }

            .loginmodal-container h1 {
                text-align: center;
                margin-bottom: 20px;
                color: #428bca;
            }

            .loginmodal-container input[type="text"],
            .loginmodal-container input[type="password"] {
                width: 100%;
                padding: 10px;
                margin: 5px 0;
                border: 1px solid #ccc;
                border-radius: 5px; /* Lebih besar radius border */
            }

            .loginmodal-submit {
                background: #428bca;
                color: #fff;
                padding: 10px;
                border: none;
                width: 100%;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 10px;
                transition: background-color 0.3s; /* Efek transisi warna latar belakang */
            }

            .loginmodal-submit:hover {
                background: #357abf; /* Warna latar belakang saat dihover */
            }

            .login-help {
                text-align: center;
                margin-top: 10px;
            }

            .login-help a {
                text-decoration: none;
                color: #428bca;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <img src="logonusput.png" alt="Sekolah Nusaputra Logo" class="logo">
            <h1><strong>Penilaian Kinerja Guru <br/> Sekolah Nusaputra</strong></h1>

            <?php
            if(isset($_GET['pesan'])){
                if($_GET['pesan']=="gagal"){
                    echo "<div class='alert'>Username and Password do not match!</div>";
                }
            }
            ?>

            <div class="kotak_login">
            <p class="tulisan_login"><b> Selamat Datang </b></p>
            <p class="tulisan_perintah">*silahkan isi kolom berikut</p>

            

                <form action="cek_login.php" method="post">
                    <label>Username</label>
                    <input type="text" name="username" class="form_login" required="required">

                    <label>Password</label>
                    <input type="password" name="password" class="form_login" required="required">

                    <button type="submit" class="tombol_login" value="LOGIN">Login</button>

                    <br/>
                    <br/>
                </form>
            </div>
        </div>

        <!-- Modal HTML for login -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Silahkan Masuk</h1><br>
                    <form>
                        <input type="text" name="user" placeholder="Username">
                        <input type="password" name="pass" placeholder="Password">
                        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                    </form>

                    <div class="login-help">
                        <a href="#">Register</a> - <a href="#">Forgot Password</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>