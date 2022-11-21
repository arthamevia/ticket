<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use App\Models\Movies;
use App\Models\Kursi;
use DB;
use Illuminate\Http\Request;


class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $jadwal = Jadwal::with('tiket','movies')->get();
        $jadwal = Jadwal::all();
        $kursi = Kursi::all();
        // $stok = Jadwal::where('jadwal')->count();
        return view('jadwal.index', compact('jadwal', 'kursi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movies = Movies::all();
        $kursi = Kursi::all();
        return view('jadwal.create', compact('movies','kursi'));
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
            'id_movie' => 'required|unique:movies',
            'id_kursi' => 'required|unique:kursis',
            'harga' => 'required',
            'stok' => 'required',
            'tgl' => 'required',
            'tayang' => 'required',
            'selesai' => 'required',

        ]);

        $jadwal = new Jadwal();
        $jadwal->id_movie = $request->id_movie;
        $jadwal->id_kursi = $request->id_kursi;
        $jadwal->harga = $request->harga;
        $jadwal->stok = $request->stok;
        $jadwal->tgl = $request->tgl;
        $jadwal->tayang = $request->tayang;
        $jadwal->selesai = $request->selesai;
        $jadwal->save();
        return redirect()->route('jadwal.index')
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
        $jadwal = Jadwal::findOrFail($id);
        $movies = Movies::all();
        return view('jadwal.show', compact('jadwal','movies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $movies = Movies::all();

        return view('jadwal.edit', compact('jadwal', 'movies'));
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
            'id_movie' => 'required|unique:movies',
            'id_kursi' => 'required|unique:kursis',
            'harga' => 'required',
            'stok' => 'required',
            'tgl' => 'required',
            'tayang' => 'required',
            'selesai' => 'required',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->id_movie = $request->id_movie;
        $jadwal->id_kursi = $request->id_kursi;
        $jadwal->harga = $request->harga;
        $jadwal->stok = $request->stok;
        $jadwal->tgl = $request->tgl;
        $jadwal->tayang = $request->tayang;
        $jadwal->selesai = $request->selesai;
        $jadwal->save();
        return redirect()->route('jadwal.index')
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
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('jadwal.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
