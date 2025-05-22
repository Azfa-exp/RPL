<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
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
            max-width: 900px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
        }

        a.btn-tambah {
            background-color: #764ba2;
            color: white;
            padding: 12px 20px;
            border-radius: 6px;
            text-decoration: none;
            margin-bottom: 25px;
            font-weight: 600;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: background-color 0.3s ease;
        }

        a.btn-tambah:hover {
            background-color: #5a3d84;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 900px;
            background: #fff;
            color: #333;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
            border: none;
        }

        thead {
            background: linear-gradient(90deg, #764ba2, #667eea);
            color: #fff;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 0.05em;
            font-size: 0.9rem;
        }

        th, td {
            padding: 15px 20px;
            text-align: left;
            vertical-align: middle;
        }

        tbody tr {
            border-bottom: 1px solid #eee;
            transition: background-color 0.3s ease, color 0.3s ease;
            color: #333;
        }

        tbody tr:hover {
            background-color: #f0f0f0;
            color: #764ba2;
            cursor: default;
        }

        .action-icon {
            color: #764ba2;
            cursor: pointer;
            text-decoration: none;
            margin-right: 10px;
            vertical-align: middle;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
            transition: color 0.2s ease;
        }

        .action-icon svg {
            width: 20px;
            height: 20px;
            fill: currentColor;
        }

        .action-icon:hover {
            color: #5a3d84;
        }

        button.delete-btn {
            background: none;
            border: none;
            padding: 0;
            margin: 0;
            vertical-align: middle;
            cursor: pointer;
            color: red;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
            transition: color 0.2s ease;
        }

        button.delete-btn svg {
            fill: red;
            width: 20px;
            height: 20px;
        }

        button.delete-btn:hover {
            color: darkred;
        }

        button.delete-btn:hover svg {
            fill: darkred;
        }

        .dropdown {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .dropdown-button {
            background-color: #764ba2;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            right: 0;
            background-color: #fff;
            min-width: 180px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 6px;
            margin-top: 5px;
        }

        .dropdown-menu a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-menu a:hover {
            background-color: #eee;
        }

        @media (max-width: 600px) {
            body {
                padding: 20px 10px;
            }
            h1 {
                font-size: 2rem;
            }
            table {
                font-size: 0.85rem;
            }
            th, td {
                padding: 12px 15px;
            }
        }
    </style>
</head>
<body>

    <!-- Dropdown menu -->
    <div class="dropdown">
        <button onclick="toggleDropdown()" class="dropdown-button">Menu ▼</button>
        <div id="dropdown-menu" class="dropdown-menu">
            <a href="{{ route('dashboard') }}">Kembali ke Dashboard</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>

    <h1>Data Siswa</h1>

    <a href="{{ route('siswa.create') }}" class="btn-tambah">Tambah Siswa</a>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>NIS</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $s)
                <tr>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->kelas }}</td>
                    <td>{{ $s->nis }}</td>
                    <td>{{ $s->jurusan }}</td>
                    <td>
                        <a href="{{ route('siswa.show', $s->id) }}" class="action-icon" title="View">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" >
                                <path d="M12 5c-7 0-11 7-11 7s4 7 11 7 11-7 11-7-4-7-11-7zm0 12a5 5 0 110-10 5 5 0 010 10z"/>
                                <circle cx="12" cy="12" r="2.5"/>
                            </svg>
                        </a>

                        <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn" title="Hapus">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" >
                                    <path d="M3 6h18v2H3V6zm2 3h14v11a2 2 0 01-2 2H7a2 2 0 01-2-2V9zm5 3v5h2v-5h-2zm4 0v5h2v-5h-2zM9 4h6v2H9V4z"/>
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        function toggleDropdown() {
            const menu = document.getElementById("dropdown-menu");
            menu.style.display = menu.style.display === "block" ? "none" : "block";
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropdown-button')) {
                const dropdown = document.getElementById("dropdown-menu");
                if (dropdown && dropdown.style.display === "block") {
                    dropdown.style.display = "none";
                }
            }
        }
    </script>
</body>
</html>