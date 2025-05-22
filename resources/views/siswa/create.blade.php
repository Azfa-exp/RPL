<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
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
            max-width: 500px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
        }

        form {
            background: white;
            color: #333;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
            width: 100%;
            max-width: 500px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1rem;
            box-sizing: border-box;
        }

        button {
            background-color: #764ba2;
            color: white;
            padding: 14px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 600;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #5a3d84;
        }

        .error {
            color: red;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        a.back-link {
            display: inline-block;
            margin-top: 25px;
            color: white;
            text-decoration: underline;
            font-weight: 600;
        }

        a.back-link:hover {
            color: #ddd;
        }
    </style>
</head>
<body>
    <h1>Tambah Siswa</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>

        <label for="nis">NIS</label>
        <input type="text" id="nis" name="nis" value="{{ old('nis') }}" required>

        <label for="kelas">Kelas</label>
        <input type="text" id="kelas" name="kelas" value="{{ old('kelas') }}" required>

        <label for="jurusan">Jurusan</label>
        <input type="text" id="jurusan" name="jurusan" value="{{ old('jurusan') }}" required>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('siswa.index') }}" class="back-link">Kembali ke Daftar Siswa</a>
</body>
</html>