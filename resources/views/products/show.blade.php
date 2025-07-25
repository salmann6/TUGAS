<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
</head>
<body>
    <h1>Detail Produk</h1>
    @if ($product)
        <p>Nama: {{ $product['name'] }}</p>
        <p>Harga: Rp{{ $product['price'] }}</p>
    @else
        <p>Produk tidak ditemukan.</p>
    @endif
</body>
</html>
