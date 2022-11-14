<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Studio;


class StudioController extends Controller
{
    public function index()
    {
        $studio = Studio::select("id", "nama","jumlah_sheet")->get();
        return response()->json([
            "data" => $studio,
            "status" => 200,
        ]);
    }

    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'nama' => 'required',
            'jumlah_sheet' => 'required',
        ]);

        $studio = new Studio();
        $studio->nama = $request->nama;
        $studio->jumlah_sheet = $request->jumlah_sheet;
        $studio->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully created Studio",
        ]);
    }

    public function show($id)
    {
        $studio = Studio::findOrFail($id);
        return response()->json([
            "data" => $studio,
            "status" => 200,
        ]);
    }

    public function update(Request $request, $id)
    {
        $studio = Studio::findOrFail($id);

        if ($request->nama != $studio->nama) {
            $rules['nama'] = 'required|unique:studio';
        }

        $validasiData = $request->validate($rules);
        $studio->nama = $request->nama;
        $studio->jumlah_sheet = $request->jumlah_sheet;
        $studio->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully updated Studio",
        ]);
    }

    public function destroy($id)
    {
        $studio = Studio::findOrFail($id);
        $studio->delete();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully deleted Studio",
        ]);
    }
}
