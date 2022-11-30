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
            'name' => 'required',
            'desc' => 'required',
            'img' => 'required|image|max:2048',
            'vid' => 'required|video',
            'price' => 'required',
            'category_id' => 'required|unique:categories',
            'director' => 'required',
            'release' => 'required',
            'duration' => 'required',
            'rate' => 'required',
        ]);

        $movies = new Movies();
        $movies->name = $request->name;
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

        if ($request->name != $movies->name) {
            $rules['name'] = 'required|unique:movies';
        }

        $validasiData = $request->validate($rules);
        $movies->name = $request->name;
        $movies->desc = $request->desc;
        
        if ($request->hasFile('img')) {
            $movies->deleteImage(); //menghapus foto sebelum di update melalui method deleteImage di model
            $image = $request->file('img');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/movies/', $name);
            $movies->img = $name;
        }
        if ($request->hasFile('vid')) {
            $movies->deleteVid(); //menghapus foto sebelum di update melalui method deletevid di model
            $video = $request->file('vid');
            $name = rand(1000, 9999) . $video->getClientOriginalName();
            $video->move('videos/movies/', $name);
            $movies->vid = $name;
        }
        $movies->price = $request->price;
        $movies->category_id = $request->category_id;
        $movies->director = $request->director;
        $movies->release = $request->release;
        $movies->duration = $request->duration;
        $movies->rate = $request->rate;
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