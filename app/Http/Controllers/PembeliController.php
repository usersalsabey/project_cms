<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
    {
        $pembelis = Pembeli::all();
        return view('pembeli.index', compact('pembelis'));
    }

    public function create()
    {
        return view('pembeli.create');
    }

    public function store(Request $request)
    {
        Pembeli::create($request->all());
        return redirect()->route('pembeli.index');
    }

    public function show(Pembeli $pembeli)
    {
        return view('pembeli.show', compact('pembeli'));
    }

    public function edit(Pembeli $pembeli)
    {
        return view('pembeli.edit', compact('pembeli'));
    }

    public function update(Request $request, Pembeli $pembeli)
    {
        $pembeli->update($request->all());
        return redirect()->route('pembeli.index');
    }

    public function destroy(Pembeli $pembeli)
    {
        $pembeli->delete();
        return redirect()->route('pembeli.index');
    }
}
