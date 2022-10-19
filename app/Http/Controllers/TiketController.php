<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
use App\Models\Kursi;
use App\Models\Tiket;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiket = Tiket::all();
        return view('tiket.index', compact('tiket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kursi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'nk' => 'required',
            'nama' => 'required',
        ]);

        $tiket = new Tiket();
        $tiket->kode = $request->kode;
        $tiket->stok = $request->stok;
        $tiket->harga = $request->harga;
        $tiket->nk = $request->nk;
        $tiket->nama = $request->nama;
        $tiket->save();
        return redirect()->route('tiket.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('tiket.show', compact('tiket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('tiket.edit', compact('tiket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kode' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'nk' => 'required',
            'nama' => 'required',
        ]);

        $tiket = Tiket::findOrFail($id);
        $tiket->kode = $request->kode;
        $tiket->stok = $request->stok;
        $tiket->harga = $request->harga;
        $tiket->nk = $request->nk;
        $tiket->nama = $request->nama;
        $tiket->save();
        return redirect()->route('tiket.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->delete();
        return redirect()->route('tiket.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
