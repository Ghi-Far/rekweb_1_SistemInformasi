<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Harga Produk</title>
</head>
<body>
    <h1>Harga Produk</h1>
    <h2>Laptop Laravel</h2>
    <p>
        Harga:
        <strong>Rp 8.500.000</strong>
    </p>
    <hr>
    <a href="{{ route('produk.index', ['age' => request('age')]) }}">
        ← Kembali ke Produk
    </a>
    |
    <a href="{{ route('produk.detail', ['age' => request('age')]) }}">
        Detail
    </a>
</body>
</html>
