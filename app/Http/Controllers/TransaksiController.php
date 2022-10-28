<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Movies;
use App\Models\Jadwal;
use App\Models\Kursi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $movies = Movies::all();
        $jadwal = Jadwal::all();
        $kursi = Kursi::all();
        return view('transaksi.create', compact('user', 'movies', 'jadwal', 'kursi'));
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
            'kode_transaksi' => 'required',
            'id_costumer' => 'required|unique:users',
            'id_movie' => 'required|unique:movies',
            'id_jadwal' => 'required|unique:jadwals',
            'id_kursi' => 'required|unique:kursis',
            'banyak' => 'required',
            // 'title_img' => 'required|image|max:2048',
            // 'img' => 'required|image|max:2048',
            // 'category_id' => 'required|unique:categories',
            'total_harga' => 'required',
            'tgl_psn' => 'required',
        ]);

        $transaksi = new Transaksi();
        $transaksi->kode_transaksi = $request->kode_transaksi;
        $transaksi->id_costumer = $request->id_costumer;
        $transaksi->id_movie = $request->id_movie;
        $transaksi->id_jadwal = $request->id_jadwal;
        $transaksi->id_kursi = $request->id_kursi;
        $transaksi->banyak = $request->banyak;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->tgl_psn = $request->tgl_psn;
        $transaksi->save();
        return redirect()->route('transaksi.index')
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
        $transaksi = Transaksi::findOrFail($id);
        $user = User::all();
        $movies = Movies::all();
        $jadwal = Jadwal::all();
        $kursi = Kursi::all();
        return view('admin.transaksi.show', compact('transaksi', 'user', 'movies', 'kursi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $user = User::all();
        $movies = Movies::all();
        $jadwal = Jadwal::all();
        $kursi = Kursi::all();
        return view('transaksi.edit', compact('transaksi', 'user', 'movies', 'jadwal', 'kursi'));
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
            'kode_transaksi' => 'required',
            'id_costumer' => 'required|unique:users',
            'id_movie' => 'required|unique:movies',
            'id_jadwal' => 'required|unique:jadwals',
            'id_kursi' => 'required|unique:kursis',
            'banyak' => 'required',
            'total_harga' => 'required',
            'tgl_psn' => 'required',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->kode_transaksi = $request->kode_transaksi;
        $transaksi->id_costumer = $request->id_costumer;
        $transaksi->id_movie = $request->id_movie;
        $transaksi->id_jadwal = $request->id_jadwal;
        $transaksi->id_kursi = $request->id_kursi;
        $transaksi->banyak = $request->banyak;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->tgl_psn = $request->tgl_psn;
        $transaksi->save();
        return redirect()->route('transaksi.index')
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
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')
            ->with('success', 'Data berhasil dibuat!');
    }
}
