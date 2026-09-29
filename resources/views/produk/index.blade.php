<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <p>
        Selamat datang di halaman produk.
    </p>
    <hr>
    <h3>Menu</h3>
    <a href="{{ route('produk.index', ['age' => request('age')]) }}">
        Produk
    </a>
    <a href="{{ route('produk.detail', ["age" => request('age')]) }}">
        Detail
    </a>
    <a href="{{ route('produk.harga', ['age' => request('age')]) }}">
        Harga
    </a>
    <hr>
    <h2>Laptop Laravel</h2>
    <p>
        Perangkat untuk pemrograman web menggunakan PHP dan Laravel.
    </p>
    <p>
        Usia yang digunakan:
        <strong>{{ request('age') }} tahun</strong>
    </p>
</body>
</html>