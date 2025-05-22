<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard - Aplikasi Siswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .dashboard-container {
            background: #fff;
            color: #333;
            padding: 40px 30px;
            border-radius: 12px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #764ba2;
            font-size: 26px;
        }
        p {
            font-size: 16px;
        }
        .dashboard-links {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .dashboard-links a {
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: 600;
            color: #fff;
            background-color: #764ba2;
            transition: background 0.3s ease;
        }
        .dashboard-links a:hover {
            background-color: #5a3d84;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Dashboard</h2>
        <p>Selamat datang, {{ Auth::user()->name }}!</p>

        <div class="dashboard-links">
            <a href="{{ route('siswa.index') }}">Daftar Siswa</a>
            <a href="{{ route('profile.edit') }}">Profil Saya</a>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               Keluar
            </a>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
            @csrf
        </form>
    </div>
</body>
</html>