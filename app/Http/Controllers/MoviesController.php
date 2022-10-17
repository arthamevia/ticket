<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Movies;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
            'nama' => 'required',
            'decs' => 'required',
            'title_img' => 'required|image|max:2048',
            'img' => 'required|image|max:2048',
            'category_id' => 'required|unique:categories',
            'directory' => 'required',
            'rilis' => 'required',
            'duration' => 'required',
            'rate' => 'required',
            'riviews' => 'required',
        ]);

        $movies = new Movies();
        $movies->nama = $request->nama;
        $movies->decs = $request->decs;
        if ($request->hasFile('foto')) {
            $movies->deleteImage(); //menghapus foto sebelum di update melalui method deleteImage di model
            $title_img = $request->file('foto');
            $name = rand(1000, 9999) . $title_img->getClientOriginalName();
            $title_img->move('image/movies/', $name);
            $movies->foto = $name;
        }
        if ($request->hasFile('foto2')) {
            $movies->deleteImage(); //menghapus foto sebelum di update melalui method deleteImage di model
            $image = $request->file('foto2');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/movies/', $name);
            $movies->foto2 = $name;
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
            'nama' => 'required',
            'decs' => 'required',
            'title_img' => 'required|image|max:2048',
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
        if ($request->hasFile('foto')) {
            $movies->deleteImage(); //menghapus foto sebelum di update melalui method deleteImage di model
            $title_img = $request->file('foto');
            $name = rand(1000, 9999) . $title_img->getClientOriginalName();
            $title_img->move('image/movies/', $name);
            $movies->foto = $name;
        }
        if ($request->hasFile('foto2')) {
            $movies->deleteImage(); //menghapus foto sebelum di update melalui method deleteImage di model
            $image = $request->file('foto2');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/movies/', $name);
            $movies->foto2 = $name;
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
        $movies->deleteImage();
        $movies->delete();
        return redirect()->route('movies.index')
            ->with('success', 'Data berhasil dibuat!');
    }
}
