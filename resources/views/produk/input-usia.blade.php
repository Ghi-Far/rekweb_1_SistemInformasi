<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Verifikasi Usia</title>
</head>
<body>
    <h1>Veridikasi Usia</h1>
    <p>
        Silahkan masukan usia untuk mengakses halaman produk.
    </p>
    <form action="{{ route('produk.index') }}" method="GET">
        <label>Usia: </label>
        <input
            type="number"
            name="age"
            min="1"
            required
        >
        <button type="submit">
            Masuk
        </button>
    </form>
</body>
</html>