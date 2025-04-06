<!DOCTYPE html>
<html>
<head>
    <title>Marketplace</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <ul>
        @foreach ($produk as $item)
            <li>
                <strong>{{ $item['nama'] }}</strong> - Rp{{ number_format($item['harga']) }}
                <form action="/tambah-ke-keranjang" method="POST" style="display:inline">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item['id'] }}">
                    <input type="hidden" name="nama" value="{{ $item['nama'] }}">
                    <input type="hidden" name="harga" value="{{ $item['harga'] }}">
                    <button type="submit">Tambah ke Keranjang</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="/keranjang">Lihat Keranjang</a>
</body>
</html>
