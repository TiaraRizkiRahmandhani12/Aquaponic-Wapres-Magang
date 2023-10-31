<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('/img/LOGINWP.png'); /* Ganti '/path/to/your/background.png' dengan path yang sesuai */
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: flex-end; /* Menggeser kotak ke kanan */
            align-items: center;
        }

        .login-box {
            width: 350px;
            height: 550px;
            flex-shrink: 0;
            background: rgba(255, 255, 255, 0.7); /* Latar belakang kotak login dengan opacity */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-right: 170px; /* Menggeser kotak dari sisi kanan */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start; /* Menaruh konten di tengah kotak */
        }

        .logo {
            width: 171px; /* Lebar gambar logo sesuaikan dengan kebutuhan Anda */
            height: 86px; /* Tinggi gambar logo sesuaikan dengan kebutuhan Anda */
            margin: 0px 0 30px; /* Jarak di atas dan di bawah gambar logo */
        }

        .title {
            font-family: sans-serif; /* Mengubah font teks  */
            font-size: 14px; /* Ubah ukuran font sesuai kebutuhan Anda */
            font-weight: bold; /* Membuat teks menjadi bold */
            margin-bottom: 40px; /* Menambahkan jarak bawah 10px untuk menjatuhkan tulisan "Username" */
        }

        .username {
            text-align: left; /* Teks di sisi kiri */
            margin-right: 240px; /* Jarak kiri 20px */
            font-family: sans-serif; /* Mengubah font teks  */
            font-size: 12px; /* Ubah ukuran font sesuai kebutuhan Anda */
            font-weight: bold; /* Membuat teks menjadi bold */
            margin-bottom: 5px; /* Menambahkan jarak bawah 10px untuk menjatuhkan tulisan "Username" */
        }

        .password {
            text-align: left; /* Teks di sisi kiri */
            margin-right: 240px; /* Jarak kiri 20px */
            font-family: sans-serif; /* Mengubah font teks  */
            font-size: 12px; /* Ubah ukuran font sesuai kebutuhan Anda */
            font-weight: bold; /* Membuat teks menjadi bold */
            margin-bottom: 5px; /* Menambahkan jarak bawah 10px untuk menjatuhkan tulisan "Username" */
        }

        .input-container-pw {
            display: flex;
            justify-content: flex-start;
        }

        .input-container-usr {
            display: flex;
            justify-content: flex-start;
        }

        .input-box {
            width: 260px;
            height: 30px;
            margin-right: 0px;
            border-radius: 5px; /* Membuat tepi input box melengkung */
            border: 2px solid #EEEEEE; /* Warna tepi adalah abu-abu (#ccc) dan ketebalannya 2px */
        }

        .input-image-user {
            width: 35px; /* Lebar gambar input ikon */
            height: 35px; /* Tinggi gambar input ikon */
        }

        .input-image-pwd {
            width: 35px; /* Lebar gambar input ikon */
            height: 35px; /* Tinggi gambar input ikon */
        }

        .forgot-password {
            text-align: right; /* Teks akan diletakkan di sebelah kanan */
            margin-top: 10px; /* Menambahkan jarak atas antara teks "Forgot Password?" dan input box password */
            margin-left: 180px; /* Menggeser teks "Forgot Password?" ke kanan */
        }

        .forgot-password a {
            text-decoration: underline; /* Memberikan garis bawah pada teks anchor */
            color: #325eaf; /* Mengubah warna teks menjadi biru */
        }

        .login-now {
            text-align: center; /* Teks di tengah kotak */
            margin-top: 20px; /* Menambahkan jarak atas antara kotak dan elemen di atasnya */
        }

        .login-button {
            width: 290px;
            height: 35px;
            border: none;
            border-radius: 5px;
            background-color: #398EA9; /* Warna latar belakang tombol */
            color: white; /* Warna teks tombol */
            font-weight: bold; /* Membuat teks menjadi bold */
            cursor: pointer; /* Mengubah ikon kursor saat diarahkan ke tombol */
            font-size: 12px; /* Ubah ukuran font sesuai kebutuhan Anda */
        }

        .image-or {
            text-align: center; /* Teks di tengah kotak */
            margin-top: 20px; /* Menambahkan jarak atas antara kotak "Login Now" dan elemen gambar */
        }

        .image {
            width: 290px; /* Lebar gambar sesuaikan dengan kebutuhan Anda */
            height: 18px; /* Tinggi gambar sesuaikan dengan kebutuhan Anda */
        }

        .sign-now {
            text-align: center; /* Teks di tengah kotak */
            margin-top: 20px; /* Menambahkan jarak atas antara kotak dan elemen di atasnya */
        }

        .sign-button {
            width: 290px;
            height: 35px;
            border: 2px solid #398EA9; /* Warna garis tepi (#398EA9) dengan ketebalan 1px */
            border-radius: 5px;
            background-color: #EEEEEE; /* Warna latar belakang tombol */
            color: #398EA9; /* Warna teks tombol (#398EA9) */
            font-weight: bold; /* Membuat teks menjadi bold */
            cursor: pointer; /* Mengubah ikon kursor saat diarahkan ke tombol */
            font-size: 12px; /* Ubah ukuran font sesuai kebutuhan Anda */
        }

        .evomo {
            margin-top: 15px; /* Menambahkan jarak atas antara kotak dan tulisan hak cipta */
        }

        .copyright {
            color: #398EA9; /* Memberikan warna teks */
        }




        /* Tambahkan gaya CSS tambahan sesuai kebutuhan Anda */
    </style>
</head>
<body>
    <div class="login-box">
        <img src="/img/logo.png" class="logo" alt="Logo"> <!-- Ganti '/path/to/your/logo.png' dengan path ke gambar logo PNG Anda -->
        <p class="title">Login into your account</p>
        <p class="username">Username</p>
        <div class="input-container-usr">
            <img src="/img/iconuser.png" class="input-image-user" alt="Input Icon"> <!-- Ganti '/path/to/your/input_icon.png' dengan path ke gambar ikon input Anda -->
            <input type="text" placeholder="Masukan Username" class="input-box"> <!-- Kotak input untuk username -->
        </div>
        <div class="evomo">
            <p class="password">Password</p>
        </div>
        <div class="input-container-pw">
            <img src="/img/iconpwd.png" class="input-image-pwd" alt="Input Icon"> <!-- Ganti '/path/to/your/input_icon.png' dengan path ke gambar ikon input Anda -->
            <input type="text" placeholder="Masukan Password" class="input-box"> <!-- Kotak input untuk username -->
        </div>
        <div class="forgot-password">
            <a href="#">Forgot Password?</a>
        </div>
        <div class="login-now">
            <form method="POST" action="/login">
            @csrf <!-- Tambahkan token CSRF untuk keamanan -->
            <button class="login-button" type="submit">Login Now</button>
            </form>
        </div>
        <div class="image-or">
            <img src="/img/or.png" alt="Image" class="image">
        </div>
        <div class="sign-now">
            <button class="sign-button">Signup Now</button>
        </div>
        <div class="evomo">
            <p class="copyright">©Evomo by Telkom Indonesia 2023</p>
        </div>


        <!-- Isi kotak login, seperti formulir login -->
    </div>
</body>
</html>
