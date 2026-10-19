<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('mahasiswa.store') }}" method="POST">
                        @csrf

                        {{-- Input NIM --}}
                        <div class="mb-4">
                            <label for="nim" class="block text-sm font-medium text-gray-700">NIM</label>
                            <input type="text" id="nim" name="nim" value="{{ old('nim') }}" placeholder="Contoh: 2021001" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('nim') border-red-500 @enderror">
                            @error('nim')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Input Nama --}}
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Contoh: Ahmad Fadli" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('nama') border-red-500 @enderror">
                            @error('nama')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Input Jurusan --}}
                        <div class="mb-4">
                            <label for="jurusan" class="block text-sm font-medium text-gray-700">Program Studi / Jurusan</label>
                            <input type="text" id="jurusan" name="jurusan" value="{{ old('jurusan') }}" placeholder="Contoh: Sistem Informasi" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('jurusan') border-red-500 @enderror">
                            @error('jurusan')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Tombol Aksi Simpan & Batal --}}
                        <div style="display: flex; align-items: center; gap: 12px; margin-top: 24px;">
                            {{-- Tombol Simpan --}}
                            <button type="submit" style="background-color: #1d4ed8; color: #ffffff; padding: 10px 24px; border-radius: 6px; font-weight: 600; font-size: 14px; border: none; cursor: pointer; box-shadow: 0 1px 2px rgba(0,0,0,0.1);">
                                Simpan Data
                            </button>

                            {{-- Tombol Batal --}}
                            <a href="{{ route('mahasiswa.index') }}" style="background-color: #e5e7eb; color: #374151; padding: 10px 20px; border-radius: 6px; font-weight: 500; font-size: 14px; text-decoration: none; display: inline-block;">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
