<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index()
    {
        $kasirs = Kasir::all();
        return view('kasir.index', compact('kasirs'));
    }

    public function create()
    {
        return view('kasir.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jadwal_kerja' => 'required',
            'kontak' => 'required',
        ]);

        Kasir::create($request->all());
        return redirect()->route('kasir.index')->with('success', 'Kasir berhasil ditambahkan.');
    }

    public function edit(Kasir $kasir)
    {
        return view('kasir.edit', compact('kasir'));
    }

    public function update(Request $request, Kasir $kasir)
    {
        $request->validate([
            'nama' => 'required',
            'jadwal_kerja' => 'required',
            'kontak' => 'required',
        ]);

        $kasir->update($request->all());
        return redirect()->route('kasir.index')->with('success', 'Kasir berhasil diperbarui.');
    }

    public function destroy(Kasir $kasir)
    {
        $kasir->delete();
        return redirect()->route('kasir.index')->with('success', 'Kasir berhasil dihapus.');
    }
    
}
