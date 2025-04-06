<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
</head>
<body>
    <h1>Keranjang Belanja</h1>
    @if (count($keranjang) > 0)
        <ul>
            @foreach ($keranjang as $item)
                <li>{{ $item['nama'] }} - Rp{{ number_format($item['harga']) }}</li>
            @endforeach
        </ul>
        <a href="/checkout">Lanjut ke Checkout</a>
    @else
        <p>Keranjang kosong.</p>
    @endif
    <br>
    <a href="/">← Kembali ke Produk</a>
</body>
</html>
