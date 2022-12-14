<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Movies;
use DB;


class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $movies = Movies::with(['category'])->get();
        // return response()->json($movies);
        $movies = Movies::with('category')->get();
        return view('movies.index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('movies.create', compact('category'));
        
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
            'name' => 'required',
            'desc' => 'required',
            // 'title_img' => 'required|image|max:2048',
            // 'img' => 'required|image|max:2048',
            // 'category_id' => 'required|unique:categories',
            'price' => 'required',
            'klasifikasi' => 'required',
            'director' => 'required',
            'release' => 'required',
            'duration' => 'required',
            'rate' => 'required',
        ]);

        $movies = new Movies();
        $movies->name = $request->name;
        $movies->desc = $request->desc;
        
        if ($request->hasFile('img')) {
            $movies->deleteImg(); //menghapus foto sebelum di update melalui method deleteImg di model
            $image = $request->file('img');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/movies/', $name);
            $movies->img = "images/movies/". $name;
        }
        if ($request->hasFile('vid')) {
            $movies->deleteVid(); //menghapus foto sebelum di update melalui method deletevid di model
            $video = $request->file('vid');
            $name = rand(1000, 9999) . $video->getClientOriginalName();
            $video->move('video/movies/', $name);
            $movies->vid = "video/movies/".$name;
        }
        $movies->price = $request->price;
        $movies->klasifikasi = $request->klasifikasi;
        $movies->category_id = $request->category_id;
        $movies->director = $request->director;
        $movies->release = $request->release;
        $movies->duration = $request->duration;
        $movies->rate = $request->rate;
        $movies->save();
        return redirect()->route('movies.index')
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
        $movies = Movies::findOrFail($id);
        return view('movies.show', compact('movies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies = Movies::findOrFail($id);
        $category = Category::all();

        return view('movies.edit', compact('movies', 'category'));
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
            'name' => 'required',
            'desc' => 'required',
            'img' => 'required|image|max:2048',
            // 'vid' => 'required|video',
            'price' => 'required',
            'klasifikasi' => 'required',
            'director' => 'required',
            'release' => 'required',
            'duration' => 'required',
            'rate' => 'required',
        ]);

        $movies = Movies::findOrFail($id);
        $movies->name = $request->name;
        $movies->desc = $request->desc;
        
        if ($request->hasFile('img')) {
            $movies->deleteImg(); //menghapus foto sebelum di update melalui method deleteImg di model
            $image = $request->file('img');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/movies/', $name);
            $movies->img = "images/movies/".$name;
        }
        if ($request->hasFile('vid')) {
            $movies->deleteVid(); //menghapus foto sebelum di update melalui method deletevid di model
            $video = $request->file('vid');
            $name = rand(1000, 9999) . $video->getClientOriginalName();
            $video->move('video/movies/', $name);
            $movies->vid = "video/movies/" . $name;
        }
        $movies->price = $request->price;
        $movies->klasifikasi = $request->klasifikasi;
        $movies->category_id = $request->category_id;
        $movies->director = $request->director;
        $movies->release = $request->release;
        $movies->duration = $request->duration;
        $movies->rate = $request->rate;
        $movies->save();
        return redirect()->route('movies.index')
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
        $movies = Movies::findOrFail($id);
        $movies->deleteImg();
        $movies->deleteVid();
        $movies->delete();
        return redirect()->route('movies.index')
            ->with('success', 'Data berhasil dibuat!');
    }
}
