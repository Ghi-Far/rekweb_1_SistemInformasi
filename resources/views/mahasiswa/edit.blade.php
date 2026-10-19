<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        {{-- Input NIM --}}
                        <div class="mb-4">
                            <label for="nim" class="block text-sm font-medium text-gray-700 mb-1">NIM</label>
                            <input type="text" id="nim" name="nim" value="{{ old('nim', $mahasiswa->nim) }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 6px; padding: 8px 12px;" required>
                            @error('nim')
                                <p style="color:#dc2626; font-size: 12px; margin-top: 4px;">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Input Nama --}}
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" value="{{ old('nama', $mahasiswa->nama) }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 6px; padding: 8px 12px;" required>
                            @error('nama')
                                <p style="color:#dc2626; font-size: 12px; margin-top: 4px;">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Input Jurusan --}}
                        <div class="mb-4">
                            <label for="jurusan" class="block text-sm font-medium text-gray-700 mb-1">Program Studi / Jurusan</label>
                            <input type="text" id="jurusan" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 6px; padding: 8px 12px;" required>
                            @error('jurusan')
                                <p style="color: #dc2626; font-size: 12px; margin-top: 4px;">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Tombol Aksi --}}
                        <div style="display: flex; align-items: center; gap: 12px; margin-top: 24px;">
                            <button type="submit" style="background-color: #d97706; color: #ffffff; padding: 10px 24px; border-radius: 6px; font-weight: 600; font-size: 14px; border: none; cursor: pointer;">
                                Perbarui Data
                            </button>
                            <a href="{{ route('mahasiswa.index') }}" style="background-color: #e5e7eb; color: #374151; padding: 10px 20px; border-radius: 6px; font-weight: 500; font-size: 14px; text-decoration: none;">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
