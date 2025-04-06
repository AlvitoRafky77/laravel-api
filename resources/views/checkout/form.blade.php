<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>
    <h1>Form Checkout</h1>
    <form method="POST" action="/checkout">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br><br>

        <button type="submit">Kirim Pembayaran</button>
    </form>
    <br>
    <a href="/keranjang">← Kembali ke Keranjang</a>
</body>
</html>
