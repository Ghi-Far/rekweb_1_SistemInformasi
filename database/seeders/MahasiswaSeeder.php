<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'nim'     => '22101140001',
            'nama'    => 'Ahmad Rizky',
            'jurusan' => 'Teknik Informatika',
        ]);
        
        Mahasiswa::create([
            'nim'     => '22101140002',
            'nama'    => 'Siti Nurhaliza',
            'jurusan' => 'Sistem Informasi',
        ]);
    }
}
