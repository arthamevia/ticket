<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Movies;
use App\Models\Jadwal;
use App\Models\Kursi;
use Illuminate\Support\Str;


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
            'id_costumer' => 'required',
            'id_movie' => 'required',
            'id_jadwal' => 'required',
            'id_kursi' => 'required',
            'banyak' => 'required',
            'total_harga' => 'required',
            'tgl_psn' => 'required',
        ]);

        $transaksi = new Transaksi();
        $kode_transaksis = DB::table('transaksis')->select(DB::raw('MAX(RIGHT(kode_transaksi,3)) as kode'));
        if ($kode_transaksis->count() > 0) {
            foreach ($kode_transaksis->get() as $kode_transaksi) {
                $x = ((int) $kode_transaksi->kode) + 1;
                $kode = sprintf('%03s', $x);
            }
        } else {
            $kode = '001';
        }
        $transaksi->kode_transaksi = 'GNQ-' . date('dmy') . $kode;
        $transaksi->id_costumer = $request->id_costumer;
        $transaksi->id_movie = $request->id_movie;
        $transaksi->id_jadwal = $request->id_jadwal;
        $transaksi->id_kursi = $request->id_kursi;
        $transaksi->banyak = $request->banyak;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->tgl_psn = $request->tgl_psn;
        // $jadwal = Jadwal::findOrFail($transaksi->transaksi->jadwal);
        // if ($jadwal->stok < $transaksis->transaksi->banyak) {
        //     return redirect()
        //         ->route('transaksi.create')
        //         ->with('toast_error', 'Stok Kurang');
        // } else {
        //     $jadwal->stok -= $transaksi->transaksi->banyak;
        // }
        // $jadwal->save();
        // $transaksi->qr_code = $qr_code;
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
        $transaksi = Transaksi::findOrFail($id);
        $rules = [
            'id_costumer' => 'required|unique:users',
            'id_movie' => 'required|unique:movies',
            'id_jadwal' => 'required|unique:jadwals',
            'id_kursi' => 'required|unique:kursis',
            'banyak' => 'required',
            'total_harga' => 'required',
            'tgl_psn' => 'required',
        ];

        if ($request->kode_transaksi != $transaksi->kode_transaksi) {
            $rules['kode_transaksi'] = 'unique:transaksis';
        }
        $validasiData = $request->validate($rules);

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
