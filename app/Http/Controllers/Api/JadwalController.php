<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use DB;



// error 500

class JadwalController extends Controller
{
    public function index (Request $request) 
    {
        $jadwal = Jadwal::with(['movies'])->get();
        return response()->json($jadwal);
    }

    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'id_movie' => 'required|unique:movies',
            'tgl' => 'required',
            'tayang' => 'required',
        ]);

        $jadwal = new Jadwal();
        $jadwal->id_movie = $request->id_movie;
        $jadwal->tgl = $request->tgl;
        $jadwal->tayang = $request->tayang;
        $jadwal->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully created Jadwal",
        ]);
    }

    public function show($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return response()->json([
            "data" => $jadwal,
            "status" => 200,
        ]);
    }

    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::findOrFail($id);

        if ($request->id_movie != $jadwal->id_movie) {
            $rules['id_movie'] = 'required|unique:movies';
        }

        $validasiData = $request->validate($rules);
        $jadwal->id_movie = $request->id_movie;
        $jadwal->tgl = $request->tgl;
        $jadwal->tayang = $request->tayang;
        $jadwal->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully updated Jadwal",
        ]);
    }

    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully deleted Jadwal",
        ]);
    }
}
