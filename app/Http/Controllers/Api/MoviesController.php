<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies;

class MoviesController extends Controller
{
    public function index (Request $request) 
    {
        $movies = Movies::with(['category'])->get();
        return response()->json($movies);
    }

    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'nama' => 'required|unique:movies',
        ]);

        $movies = new Movies();
        $movies->nama = $request->nama;
        $movies->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully created Movies",
        ]);
    }

    public function show($id)
    {
        $movies = Movies::findOrFail($id);
        return response()->json([
            "data" => $movies,
            "status" => 200,
        ]);
    }

    public function update(Request $request, $id)
    {
        $movies = Movies::findOrFail($id);

        if ($request->nama != $movies->nama) {
            $rules['nama'] = 'required|unique:movies';
        }

        $validasiData = $request->validate($rules);
        $movies->nama = $request->nama;
        $movies->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully updated Movies",
        ]);
    }

    public function destroy($id)
    {
        $movies = Movies::findOrFail($id);
        $movies->delete();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully deleted Movies",
        ]);
    }
}