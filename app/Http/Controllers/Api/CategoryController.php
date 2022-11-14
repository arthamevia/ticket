<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
        // Menampilkan Semua Data
    public function index()
    {
        $category = Category::select("id", "title","title_img")->get();
        return response()->json([
            "data" => $category,
            "status" => 200,
        ]);
    }

    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'title' => 'required',
            'title_img' => 'required',
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

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully created Category",
        ]);
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json([
            "data" => $category,
            "status" => 200,
        ]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        if ($request->title != $category->title) {
            $rules['title'] = 'required|unique:category';
        }

        $validasiData = $request->validate($rules);
        $category->title = $request->title;
        if ($request->hasFile('title_img')) {
            $category->deleteImage(); //menghapus title_img sebelum di update melalui method deleteImage di model
            $title_img = $request->file('title_img');
            $name = rand(1000, 9999) . $title_img->getClientOriginalName();
            $title_img->move('image/category/', $name);
            $category->title_img = $name;
        }
        $category->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully updated Category",
        ]);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully deleted Category",
        ]);
    }
}
