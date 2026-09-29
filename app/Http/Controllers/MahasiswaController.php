<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        // Mengembalikan ke view (atau response JSON untuk testing)
        return response()->json([
            'status' => 'success',
            'data' => $mahasiswa
        ]);
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required unique:mahasiswas',
            'nama' => 'required',
            'jurusan' => 'required',
        ]);
        
        $data = Mahasiswa::create($validated);
        
        return response()->json([
            'message' => 'Data mahasiswa berhasil ditambahkan!',
            'data' => $data
        ], 201);
    }

    // Menampilkan detail satu mahasiswa
    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        
        return response()->json($mahasiswa);
    }
}
