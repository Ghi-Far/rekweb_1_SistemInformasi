<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika menggunakan penamaan standar)
    protected $table = 'mahasiswa';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nim',
        'nama',
        'jurusan',
    ];
}