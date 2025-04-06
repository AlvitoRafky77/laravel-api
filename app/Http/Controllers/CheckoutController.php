<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
{
    public function form() {
        return view('checkout.form');
    }

    public function proses(Request $request) {
        $data = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'produk' => session('keranjang', [])
        ];

        $response = Http::post('http://localhost:8001/api/pembayaran', $data);

        return view('checkout.sukses', [
            'status' => $response->successful() ? 'Berhasil' : 'Gagal',
            'pesan' => $response->json()
        ]);
    }
}

