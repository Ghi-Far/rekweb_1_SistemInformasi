<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Produk
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">

                <h3 class="text-xl font-bold text-gray-800 mb-6 border-b pb-3">
                    Informasi Detail Produk
                </h3>

                {{-- Gambar Produk --}}
                @if ($product->image)
                    <div class="mb-6 text-center">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                             style="width: 250px; height: 250px; object-fit: cover; border-radius: 10px; margin: auto; border: 1px solid #ddd; box-shadow: 0 3px 8px rgba(0,0,0,0.15);">
                    </div>
                @else
                    <div class="mb-6 text-center bg-gray-100 p-10 rounded-lg">
                        <p class="text-gray-500">Belum ada gambar produk</p>
                    </div>
                @endif

                {{-- Informasi Produk --}}
                <div class="space-y-4">
                    <div class="border-b pb-3">
                        <p class="text-sm text-gray-500 font-semibold">Nama Produk</p>
                        <p class="text-lg font-bold text-gray-800">{{ $product->name }}</p>
                    </div>

                    <div class="border-b pb-3">
                        <p class="text-sm text-gray-500 font-semibold">Deskripsi Produk</p>
                        <p class="text-gray-800">{{ $product->description ?? '-' }}</p>
                    </div>

                    <div class="border-b pb-3">
                        <p class="text-sm text-gray-500 font-semibold">Harga Produk</p>
                        <p class="text-lg font-bold text-green-700">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    </div>

                    <div class="border-b pb-3">
                        <p class="text-sm text-gray-500 font-semibold">Stok Produk</p>
                        <p class="text-lg font-bold text-gray-800">{{ $product->stock }}</p>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('products.index') }}"
                           style="background-color: #1d4ed8 !important; color: #ffffff !important; padding: 10px 22px; border-radius: 7px; font-weight: bold; display: inline-block; text-decoration: none; border: 1px solid #1e40af; box-shadow: 0 2px 5px rgba(0,0,0,0.2);">
                            &larr; Kembali ke Daftar Produk
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
