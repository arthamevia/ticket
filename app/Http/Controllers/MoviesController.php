<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Movies;
use App\Models\Tiket;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movies::with('category', 'tiket')->get();
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
        $tiket = Tiket::all();
        return view('movies.create', compact('category', 'tiket'));
        
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
            'nama' => 'required',
            'decs' => 'required',
            // 'title_img' => 'required|image|max:2048',
            // 'img' => 'required|image|max:2048',
            // 'category_id' => 'required|unique:categories',
            'directory' => 'required',
            'rilis' => 'required',
            'duration' => 'required',
            'rate' => 'required',
            'riviews' => 'required',
        ]);

        $movies = new Movies();
        $movies->nama = $request->nama;
        $movies->decs = $request->decs;
        
        if ($request->hasFile('img')) {
            $movies->deleteImg(); //menghapus foto sebelum di update melalui method deleteImage di model
            $image = $request->file('img');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/movies/', $name);
            $movies->img = $name;
        }
        $movies->category_id = $request->category_id;
        $movies->directory = $request->directory;
        $movies->rilis = $request->rilis;
        $movies->duration = $request->duration;
        $movies->rate = $request->rate;
        $movies->riviews = $request->riviews;
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
        $tiket = Tiket::all();

        return view('movies.edit', compact('movies', 'category', 'tiket'));
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
            'nama' => 'required',
            'decs' => 'required',
            'img' => 'required|image|max:2048',
            'category_id' => 'required|unique:categories',
            'directory' => 'required',
            'rilis' => 'required',
            'duration' => 'required',
            'rate' => 'required',
            'riviews' => 'required',
        ]);

        $movies = Movies::findOrFail($id);
        $movies->nama = $request->nama;
        $movies->decs = $request->decs;
        
        if ($request->hasFile('img')) {
            $movies->deleteImage(); //menghapus foto sebelum di update melalui method deleteImage di model
            $image = $request->file('img');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/movies/', $name);
            $movies->img = $name;
        }
        $movies->category_id = $request->category_id;
        $movies->directory = $request->directory;
        $movies->rilis = $request->rilis;
        $movies->duration = $request->duration;
        $movies->rate = $request->rate;
        $movies->riviews = $request->riviews;
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
        $movies->delete();
        return redirect()->route('movies.index')
            ->with('success', 'Data berhasil dibuat!');
    }
}
