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
        $category = Category::select("id", "title")->get();
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
        ]);

        $category = new Category();
        $category->title = $request->title;
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
