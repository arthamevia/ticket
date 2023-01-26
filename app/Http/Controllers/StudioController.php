<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use App\Models\Kursi;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studio = Studio::with('kursi')->get();
        return view('studio.index', ['studio' => $studio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kursi = Kursi::all();
        return view('studio.create', compact('kursi'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_studio' => 'required',
            'id_kursi' => 'required',
        ]);

        $studio = new Studio();
        $studio->name_studio = $request->name_studio;
        $studio->id_kursi = $request->id_kursi;
        $studio->save();
        return redirect()->route('studio.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show(Studio $studio)
    {
        $studio = Studio::findOrFail($id);
        return view('studio.show', compact('studio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function edit(Studio $studio)
    {
        $studio = Studio::findOrFail($id);
        $kursi = Kursi::all();

        return view('studio.edit', compact('studio', 'kursi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studio $studio)
    {
        $validated = $request->validate([
            'name_studio' => 'required',
        ]);

        $studio = Studio::findOrFail($id);
        $studio->name_studio = $request->name_studio;
        $studio->save();
        return redirect()->route('studio.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studio $studio)
    {
        $studio = Studio::findOrFail($id);
        $studio->delete();
        return redirect()->route('studio.index')
            ->with('success', 'Data berhasil dibuat!');
    }
}
