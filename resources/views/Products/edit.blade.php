<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Produk') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        {{-- Input Nama Produk --}}
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
                            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 6px; padding: 8px 12px;" required>
                            @error('name')
                                <p style="color:#dc2626; font-size: 12px; margin-top: 4px;">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Input Deskripsi --}}
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                            <textarea id="description" name="description" rows="3" style="width: 100%; border: 1px solid #d1d5db; border-radius: 6px; padding: 8px 12px;">{{ old('description', $product->description) }}</textarea>
                            @error('description')
                                <p style="color:#dc2626; font-size: 12px; margin-top: 4px;">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Input Harga --}}
                        <div class="mb-4">
                            <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Harga (Rp)</label>
                            <input type="number" id="price" name="price" value="{{ old('price', $product->price) }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 6px; padding: 8px 12px;" required>
                            @error('price')
                                <p style="color: #dc2626; font-size: 12px; margin-top: 4px;">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Input Stok --}}
                        <div class="mb-4">
                            <label for="stock" class="block text-sm font-medium text-gray-700 mb-1">Stok</label>
                            <input type="number" id="stock" name="stock" value="{{ old('stock', $product->stock) }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 6px; padding: 8px 12px;" required>
                            @error('stock')
                                <p style="color: #dc2626; font-size: 12px; margin-top: 4px;">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Tombol Aksi --}}
                        <div style="display: flex; align-items: center; gap: 12px; margin-top: 24px;">
                            <button type="submit" style="background-color: #d97706; color: #ffffff; padding: 10px 24px; border-radius: 6px; font-weight: 600; font-size: 14px; border: none; cursor: pointer;">
                                Perbarui Data
                            </button>
                            <a href="{{ route('products.index') }}" style="background-color: #e5e7eb; color: #374151; padding: 10px 20px; border-radius: 6px; font-weight: 500; font-size: 14px; text-decoration: none;">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
