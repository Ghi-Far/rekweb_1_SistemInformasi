<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk</title>
</head>
<body>
    <h1>Detail Produk</h1>
    <p>
        <strong>Laptop Laravel</strong>
    </p>
    <p>
        Laptop untuk kebutuhan pemrograman 
        dan pengembangan aplikasi web.
    </p>
    <hr>
    <a href="{{ route('produk.index', ['age' => request('age')]) }}">
        ← Kembali ke Produk
    </a>
    |
    <a href="{{ route('produk.harga', ['age' => request('age')]) }}">
        Harga
    </a>
</body>
</html>
