<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursi;
use App\Models\Studio;

class KursiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kursi = Kursi::all();
        $studio = Studio::all();
        return view('kursi.index', compact('kursi', 'studio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studio = Studio::all();
        return view('kursi.create', compact('studio'));
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
            'id_studio' => 'required|unique:studios',
            'nk' => 'required',
        ]);

        $kursi = new Kursi();
        $kursi->id_studio = $request->id_studio;
        $kursi->nk = $request->nk;
        $kursi->save();
        return redirect()->route('kursi.index')
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
        $kursi = Kursi::findOrFail($id);
        return view('kursi.show', compact('kursi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kursi = Kursi::findOrFail($id);
        $studio = Studio::all();
        return view('kursi.edit', compact('kursi', 'studio'));
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
            'id_studio' => 'required|unique:studios',
            'nk' => 'required',
        ]);

        $kursi = Kursi::findOrFail($id);
        $kursi->id_studio = $request->id_studio;
        $kursi->nk = $request->nk;
        $kursi->save();
        return redirect()->route('kursi.index')
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
        $kursi = Kursi::findOrFail($id);
        $kursi->delete();
        return redirect()->route('kursi.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
