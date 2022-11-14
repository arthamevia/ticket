<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Movies;
use DB;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
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
            'title' => 'required',
            
        ]);

        $category = new Category();
        $category->title = $request->title;
        if ($request->hasFile('title_img')) {
            $category->deleteTitleImg(); //menghapus title_img sebelum di update melalui method deleteImage di model
            $image = $request->file('title_img');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/category/', $name);
            $category->title_img = $name;
        }
        $category->save();
        return redirect()->route('category.index')
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
        $category = Category::findOrFail($id);
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = category::findOrFail($id);
        return view('category.edit', compact('category'));
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
            'title' => 'required',
            'title_img' => 'required|image|max:2048',
        ]);

        $category = Category::findOrFail($id);
        $category->title = $request->title;
        if ($request->hasFile('title_img')) {
            $category->deleteImage(); //menghapus title_img sebelum di update melalui method deleteImage di model
            $title_img = $request->file('title_img');
            $name = rand(1000, 9999) . $title_img->getClientOriginalName();
            $title_img->move('image/category/', $name);
            $category->title_img = $name;
        }
        $category->save();
        return redirect()->route('category.index')
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
        $category = Category::findOrFail($id);
        $category->deleteTitleImg();
        $category->delete();
        return redirect()->route('category.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
