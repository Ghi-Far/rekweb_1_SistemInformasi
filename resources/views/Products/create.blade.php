<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Produk') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf

                        {{-- Input Nama Produk --}}
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Contoh: Laptop Lenovo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('name') border-red-500 @enderror" required>
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Input Deskripsi --}}
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea id="description" name="description" rows="3" placeholder="Contoh: Laptop untuk kebutuhan perkuliahan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Input Harga --}}
                        <div class="mb-4">
                            <label for="price" class="block text-sm font-medium text-gray-700">Harga (Rp)</label>
                            <input type="number" id="price" name="price" value="{{ old('price') }}" placeholder="Contoh: 8000000" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('price') border-red-500 @enderror" required>
                            @error('price')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Input Stok --}}
                        <div class="mb-4">
                            <label for="stock" class="block text-sm font-medium text-gray-700">Stok</label>
                            <input type="number" id="stock" name="stock" value="{{ old('stock') }}" placeholder="Contoh: 10" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('stock') border-red-500 @enderror" required>
                            @error('stock')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Tombol Aksi Simpan & Batal --}}
                        <div style="display: flex; align-items: center; gap: 12px; margin-top: 24px;">
                            <button type="submit" style="background-color: #1d4ed8; color: #ffffff; padding: 10px 24px; border-radius: 6px; font-weight: 600; font-size: 14px; border: none; cursor: pointer; box-shadow: 0 1px 2px rgba(0,0,0,0.1);">
                                Simpan Produk
                            </button>

                            <a href="{{ route('products.index') }}" style="background-color: #e5e7eb; color: #374151; padding: 10px 20px; border-radius: 6px; font-weight: 500; font-size: 14px; text-decoration: none; display: inline-block;">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
