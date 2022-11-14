<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studio;
use App\Models\Jadwal;
use DB;


class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studio = Studio::with('jadwal')->get();
        return view('studio.index', ['studio' => $studio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jadwal = Jadwal::all();
        return view('studio.create', compact('jadwal'));
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
            'nama' => 'required',
            'jumlah_sheet' => 'required',
        ]);

        $studio = new Studio();
        $studio->nama = $request->nama;
        $studio->jumlah_sheet = $request->jumlah_sheet;
        $studio->save();
        return redirect()->route('studio.index')
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
        $studio = Studio::findOrFail($id);
        return view('studio.show', compact('studio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studio = Studio::findOrFail($id);
        $jadwal = Jadwal::all();
        return view('studio.edit', compact('studio', 'jadwal'));
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
            'nama' => 'required',
            'jumlah_sheet' => 'required',
        ]);

        $studio = Studio::findOrFail($id);
        $studio->nama = $request->nama;
        $studio->jumlah_sheet = $request->jumlah_sheet;
        $studio->save();
        return redirect()->route('studio.index')
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
        $studio = Studio::findOrFail($id);
        $studio->delete();
        return redirect()->route('studio.index')
            ->with('success', 'Data berhasil dibuat!');
    }
}
