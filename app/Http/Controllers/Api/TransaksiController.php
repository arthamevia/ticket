<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Movies;
use App\Models\Jadwal;
use App\Models\Kursi;
use DB;

class TransaksiController extends Controller
{
    public function index (Request $request) 
    {
         $transaksi = Transaksi::with('Movies','user','jadwal','kursi')->get();
        return response()->json($transaksi);
    }

    public function store(Request $request)
    {
        //validasi
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
        $transaksi->kode_transaksi = 'TMV-' . date('dmy') . $kode;

        $transaksi->id_costumer = $request->id_costumer;
        $transaksi->id_movie = $request->id_movie;
        $transaksi->id_jadwal = $request->id_jadwal;
        $transaksi->id_kursi = $request->id_kursi;
        $transaksi->banyak = $request->banyak;
        $transaksi->total_harga = $transaksi->movies->price * $transaksi->banyak;
        $transaksi->tgl_psn = $request->tgl_psn;

        $transaksi->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully created transaksi",
        ]);
    }

    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return response()->json([
            "data" => $transaksi,
            "status" => 200,
        ]);
    }

    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);

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

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully updated Transaksi",
        ]);
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully deleted Transaksi",
        ]);
    }
}
