<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kursi;

class KursiController extends Controller
{
    public function index (Request $request) 
    {
        $kursi = Kursi::select(['id', 'studio_id', 'nama_kursi', 'status'])->get();
        return response()->json($kursi);
    }

    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'studio_id' => 'required|unique:studios',
            'nama_kursi' => 'required',
            'status' => 'required',
        ]);

        $kursi = new Kursi();
        $kursi->nama = $request->nama;
        $kursi->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully created Kursi",
        ]);
    }

    public function show($id)
    {
        $kursi = Kursi::findOrFail($id);
        return response()->json([
            "data" => $kursi,
            "status" => 200,
        ]);
    }

    public function update(Request $request, $id)
    {
        $kursi = Kursi::findOrFail($id);

        if ($request->studio_id != $kursi->studio_id) {
            $rules['studio_id'] = 'required|unique:studios';
        }

        $validasiData = $request->validate($rules);
        $kursi->studio_id = $request->studio_id;
        $kursi->jumlah_sheet = $request->jumlah_sheet;
        $kursi->status = $request->status;
        $kursi->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully updated studio",
        ]);
    }

    public function destroy($id)
    {
        $kursi = Kursi::findOrFail($id);
        $kursi->delete();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully deleted Kursi",
        ]);
    }
}
