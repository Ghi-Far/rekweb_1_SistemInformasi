<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Mahasiswa') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">
                        Data Mahasiswa
                    </h3>
                    <table class="w-full border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="p-2 text-left border">No</th>
                                <th class="p-2 text-left border">NIM</th>
                                <th class="p-2 text-left border">Nama</th>
                                <th class="p-2 text-left border">Jurusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td class="p-2 border">{{ $loop->iteration }}</td>
                                <td class="p-2 border">{{ $mhs->nim }}</td>
                                <td class="p-2 border">{{ $mhs->nama }}</td>
                                <td class="p-2 border">{{ $mhs->jurusan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
