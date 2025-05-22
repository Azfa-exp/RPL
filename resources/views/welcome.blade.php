<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang di Sistem Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            color: #fff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .container {
            text-align: center;
            max-width: 600px;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 600;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .buttons a {
            text-decoration: none;
            padding: 12px 24px;
            margin: 10px;
            border-radius: 8px;
            font-weight: bold;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-login {
            background-color: #fff;
            color: #4e54c8;
        }

        .btn-login:hover {
            background-color: #ddd;
        }

        .btn-dashboard {
            background-color: transparent;
            border: 2px solid #fff;
            color: #fff;
        }

        .btn-dashboard:hover {
            background-color: #fff;
            color: #4e54c8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang</h1>
        <p>Ini adalah Sistem Informasi Siswa. Silakan login untuk mengakses dashboard atau daftar jika belum punya akun.</p>

        <div class="buttons">
            @auth
                <a href="{{ route('dashboard') }}" class="btn-dashboard">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn-login">Login</a>
                <a href="{{ route('register') }}" class="btn-dashboard">Register</a>
            @endauth
        </div>
    </div>
</body>
</html>