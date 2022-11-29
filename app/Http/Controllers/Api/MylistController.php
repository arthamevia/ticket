<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mylist;
use App\Models\User;
use App\Models\Movies;

class MylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mylist = Mylist::where('user_id', auth()->user()->id)->select("id", "user_id", "movie_id")->with('user', 'movies')->get();
        // $jumlah_mylist = Mylist::where('user_id', auth()->user()->id)->count();
        return response()->json([
            "data" => $mylist,
            // "jumlah_mylist" => $jumlah_mylist,
            "status" => 200,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            // 'user_id' => 'required',
            'movie_id' => 'required',
        ]);

        $mylist = new Mylist();
        // $mylist->user_id = auth()->guard('api')->user()->id;
        $mylist->movie_id = $request->movie_id;
        $mylist->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully created Mylist",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mylist = Mylist::findOrFail($id);
        $mylist->delete();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully deleted Mylist",
        ]);
    }
}
