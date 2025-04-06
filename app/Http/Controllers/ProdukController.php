<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        $produk = [
            ['id' => 1, 'nama' => 'Kaos', 'harga' => 80000],
            ['id' => 2, 'nama' => 'Sepatu', 'harga' => 150000],
        ];
        return view('produk.index', compact('produk'));
    }

    public function tambah(Request $request) {
        $keranjang = session()->get('keranjang', []);
        $keranjang[] = $request->all();
        session(['keranjang' => $keranjang]);
        return redirect('/keranjang');
    }

    public function keranjang() {
        return view('produk.keranjang', [
            'keranjang' => session('keranjang', [])
        ]);
    }
}

