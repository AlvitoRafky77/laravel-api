<!DOCTYPE html>
<html>
<head>
    <title>Status Pembayaran</title>
</head>
<body>
    <h1>Status: {{ $status }}</h1>
    <p>{{ $pesan['message'] ?? 'Tidak ada pesan' }}</p>
    <br>
    <a href="/">Kembali ke Beranda</a>
</body>
</html>
