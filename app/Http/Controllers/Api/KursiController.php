<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kursi;

class KursiController extends Controller
{
    public function index (Request $request) 
    {
        $kursi = Kursi::select(['id', 'nama_kursi', 'status'])->get();
        return response()->json($kursi);
    }

    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'nama_kursi' => 'required',
            'status' => 'required',
        ]);

        $kursi = new Kursi();
        $kursi->nama_kursi = $request->nama_kursi;
        $kursi->status = $request->status;
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

        if ($request->nama_kursi != $kursi->nama_kursi) {
            $rules['nama_kursi'] = 'required|unique:kursis';
        }

        $validasiData = $request->validate($rules);
        $kursi->nama_kursi = $request->nama_kursi;
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
