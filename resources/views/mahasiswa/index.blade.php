<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Pesan Flash Sukses --}}
            @if (session('success'))
                <div style="background-color: #d1fae5; border: 1px solid #34d399; color: #065f46; padding: 12px 16px; border-radius: 8px; margin-bottom: 16px;">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Baris Judul & Tombol Tambah --}}
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                        <h3 style="font-size: 1.125rem; font-weight: 600; margin: 0;">
                            Data Mahasiswa
                        </h3>
                        <a href="{{ route('mahasiswa.create') }}" style="display: inline-block; background-color: #2563eb; color: #ffffff; padding: 8px 16px; border-radius: 6px; font-weight: 600; font-size: 14px; text-decoration: none;">
                            + Tambah Mahasiswa
                        </a>
                    </div>

                    <table class="w-full border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="p-2 text-left border">No</th>
                                <th class="p-2 text-left border">NIM</th>
                                <th class="p-2 text-left border">Nama</th>
                                <th class="p-2 text-left border">Jurusan</th>
                                <th class="p-2 text-center border">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $mhs)
                                <tr>
                                    <td class="p-2 border">{{ $loop->iteration }}</td>
                                    <td class="p-2 border">{{ $mhs->nim }}</td>
                                    <td class="p-2 border">{{ $mhs->nama }}</td>
                                    <td class="p-2 border">{{ $mhs->jurusan }}</td>
                                    <td class="p-2 border text-center">
                                        <div style="display: flex; justify-content: center; align-items: center; gap: 8px;">
                                            {{-- Tombol Edit --}}
                                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" style="display: inline-block; background-color: #f59e0b; color: #ffffff; padding: 4px 12px; border-radius: 4px; font-size: 12px; font-weight: 600; text-decoration: none;">
                                                Edit
                                            </a>

                                            {{-- Tombol Hapus --}}
                                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" style="margin: 0;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="background-color: #dc2626; color: #ffffff; padding: 4px 12px; border-radius: 4px; font-size: 12px; font-weight: 600; border: none; cursor: pointer;">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
