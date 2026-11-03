<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Produk') }}
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
                            Data Produk
                        </h3>
                        {{-- Hanya Admin yang bisa melihat tombol Tambah Produk --}}
                        @if(auth()->user()?->role === 'admin')
                            <a href="{{ route('products.create') }}" style="display: inline-block; background-color: #2563eb; color: #ffffff; padding: 8px 16px; border-radius: 6px; font-weight: 600; font-size: 14px; text-decoration: none;">
                                + Tambah Produk
                            </a>
                        @endif
                    </div>

                    <table class="w-full border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="p-2 text-left border">No</th>
                                <th class="p-2 text-left border">Nama Produk</th>
                                <th class="p-2 text-left border">Deskripsi</th>
                                <th class="p-2 text-left border">Harga</th>
                                <th class="p-2 text-left border">Stok</th>
                                {{-- Kolom Aksi hanya tampil untuk Admin --}}
                                @if(auth()->user()?->role === 'admin')
                                    <th class="p-2 text-center border">Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td class="p-2 border">{{ $loop->iteration }}</td>
                                    <td class="p-2 border">{{ $product->name }}</td>
                                    <td class="p-2 border">{{ $product->description ?? '-' }}</td>
                                    <td class="p-2 border">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                    <td class="p-2 border">{{ $product->stock }}</td>
                                    {{-- Tombol Edit & Hapus hanya tampil untuk Admin --}}
                                    @if(auth()->user()?->role === 'admin')
                                        <td class="p-2 border text-center">
                                            <div style="display: flex; justify-content: center; align-items: center; gap: 8px;">
                                                {{-- Tombol Edit --}}
                                                <a href="{{ route('products.edit', $product->id) }}" style="display: inline-block; background-color: #f59e0b; color: #ffffff; padding: 4px 12px; border-radius: 4px; font-size: 12px; font-weight: 600; text-decoration: none;">
                                                    Edit
                                                </a>
                                                {{-- Tombol Hapus --}}
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');" style="margin: 0;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="background-color: #dc2626; color: #ffffff; padding: 4px 12px; border-radius: 4px; font-size: 12px; font-weight: 600; border: none; cursor: pointer;">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="{{ auth()->user()?->role === 'admin' ? 6 : 5 }}" class="p-4 text-center text-gray-500 border">
                                        Belum ada data produk.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
