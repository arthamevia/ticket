<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use App\Models\Movies;
use App\Models\Tiket;
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
        return view('jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiket = Tiket::all();
        $movies = Movies::all();
        return view('jadwal.create', compact('movies', 'tiket'));
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
            'tgl' => 'required',
            'tayang' => 'required',
            'selesai' => 'required',
            'kode' => 'required',

        ]);

        $jadwal = new Jadwal();
        $jadwal->nama = $request->nama;
        $jadwal->tgl = $request->tgl;
        $jadwal->tayang = $request->tayang;
        $jadwal->selesai = $request->selesai;
        $jadwal->kode = $request->kode;
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
        $tiket = Tiket::all();
        $movies = Movies::all();
        return view('jadwal.show', compact('jadwal','tiket', 'movies'));
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
        $tiket = Tiket::all();

        return view('jadwal.edit', compact('jadwal', 'movies', 'tiket'));
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
            'tgl' => 'required',
            'tayang' => 'required',
            'selesai' => 'required',
            'kode' => 'required',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->nama = $request->nama;
        $jadwal->tgl = $request->tgl;
        $jadwal->tayang = $request->tayang;
        $jadwal->selesai = $request->selesai;
        $jadwal->kode = $request->kode;
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
