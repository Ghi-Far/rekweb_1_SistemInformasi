<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

// class MahasiswaController extends Controller
// {
//     public function index()
//     {
//         // $mahasiswa = Mahasiswa::all();
//         // // Mengembalikan ke view (atau response JSON untuk testing)
//         // return response()->json([
//         //     'status' => 'success',
//         //     'data' => $mahasiswa
//         // ]);

//         $mahasiswa = Mahasiswa::all();
//         return view('mahasiswa.index', compact('mahasiswa'));
//     }

//     // Menyimpan data baru
//     public function store(Request $request)
//     {
//         $validated = $request->validate([
//             'nim' => 'required unique:mahasiswas',
//             'nama' => 'required',
//             'jurusan' => 'required',
//         ]);

//         $data = Mahasiswa::create($validated);

//         return response()->json([
//             'message' => 'Data mahasiswa berhasil ditambahkan!',
//             'data' => $data
//         ], 201);
//     }

//     // Menampilkan detail satu mahasiswa
//     public function show($id)
//     {
//         $mahasiswa = Mahasiswa::findOrFail($id);

//         return response()->json($mahasiswa);
//     }
// }

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:mahasiswa,nim',
            'jurusan' => 'required|string|max:100',
        ]);

        Mahasiswa::create($validatedData);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data Mahasiswa berhasil ditambahkan');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validated = $request->validate([
            'nim' => 'required|numeric|unique:mahasiswa,nim,' . $mahasiswa->id,
            'nama' => 'required|string|min:3|max:100',
            'jurusan' => 'required|string|max:100',
        ]);

        $mahasiswa->update($validated);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        // Menghapus record dari tabel database
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
