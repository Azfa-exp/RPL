<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    // Method menampilkan form tambah siswa
    public function create()
    {
        return view('siswa.create'); // Pastikan ada file resources/views/siswa/create.blade.php
    }

    // Method menyimpan data siswa baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
            'nis' => 'required|string|unique:siswas,nis', // Validasi untuk NIS
            'jurusan' => 'required|string|max:100', // Validasi untuk Jurusan
        ]);

        Siswa::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'nis' => $request->nis,
            'jurusan' => $request->jurusan,
        ]);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
    }

    // Method menampilkan detail siswa berdasarkan id
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    // Method menghapus data siswa berdasarkan id
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data berhasil dihapus.');
    }
}