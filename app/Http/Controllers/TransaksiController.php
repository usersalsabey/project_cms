<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Pembeli;
use App\Models\Produk;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::with(['pembeli', 'produk'])->get();
        return view('transaksi.index', compact('transaksis'));
    }

    public function create()
    {
        $pembelis = Pembeli::all();
        $produks = Produk::all();
        return view('transaksi.create', compact('pembelis', 'produks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pembeli_id' => 'required|exists:pembeli,id',
            'produk_id' => 'required|exists:produk,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        $produk = Produk::findOrFail($request->produk_id);
        $total_harga = $produk->harga * $request->jumlah;

        Transaksi::create([
            'pembeli_id' => $request->pembeli_id,
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
            'total_harga' => $total_harga,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dibuat.');
    }

    public function show(Transaksi $transaksi)
    {
        $transaksi->load(['pembeli', 'produk']);
        return view('transaksi.show', compact('transaksi'));
    }

    public function edit(Transaksi $transaksi)
    {
        $pembelis = Pembeli::all();
        $produks = Produk::all();
        return view('transaksi.edit', compact('transaksi', 'pembelis', 'produks'));
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'pembeli_id' => 'required|exists:pembeli,id',
            'produk_id' => 'required|exists:produk,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        $produk = Produk::findOrFail($request->produk_id);
        $total_harga = $produk->harga * $request->jumlah;

        $transaksi->update([
            'pembeli_id' => $request->pembeli_id,
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
            'total_harga' => $total_harga,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
