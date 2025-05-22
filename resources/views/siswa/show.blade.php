<!DOCTYPE html>
<html>
<head>
    <title>Detail Siswa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 40px 20px;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-weight: 600;
            font-size: 3rem;
            margin-bottom: 30px;
            text-align: center;
            max-width: 600px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
        }

        .card {
            background: #fff;
            color: #333;
            border-radius: 12px;
            padding: 30px 40px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
        }

        .field {
            margin-bottom: 20px;
        }

        .label {
            font-weight: 600;
            color: #764ba2;
            margin-bottom: 6px;
            display: block;
            font-size: 1.1rem;
        }

        .value {
            font-size: 1.3rem;
            font-weight: 400;
        }

        a.btn-back {
            display: inline-block;
            margin-top: 30px;
            background-color: #764ba2;
            color: white;
            padding: 12px 25px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: background-color 0.3s ease;
        }

        a.btn-back:hover {
            background-color: #5a3d84;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }
            .card {
                padding: 20px;
            }
            .value {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <h1>Detail Siswa</h1>

    <div class="card">
        <div class="field">
            <span class="label">Nama</span>
            <span class="value">{{ $siswa->nama }}</span>
        </div>
        <div class="field">
            <span class="label">Kelas</span>
            <span class="value">{{ $siswa->kelas }}</span>
        </div>
        <div class="field">
            <span class="label">NIS</span>
            <span class="value">{{ $siswa->nis }}</span>
        </div>
        <div class="field">
            <span class="label">Jurusan</span>
            <span class="value">{{ $siswa->jurusan }}</span>
        </div>

        <a href="{{ route('siswa.index') }}" class="btn-back">Kembali ke Daftar Siswa</a>
    </div>
</body>
</html>