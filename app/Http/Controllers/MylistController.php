<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
use App\Models\User;
use App\Models\Mylist;

class MylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mylist = Mylist::with('movies', 'user')->get();
        // $total_mylist = Mylist::count();
        return view('mylist.index', compact('mylist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movies = Movies::all();
        $user = User::all();
        return view('mylist.create', compact('movies', 'user'));
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
            'user_id' => 'required',
            'movie_id' => 'required',
        ]);

        $mylist = new Mylist();
        $mylist->user_id = $request->user_id;
        $mylist->movie_id = $request->movie_id;
        $mylist->save();
        return redirect()
            ->route('mylist.index')->with('toast_success', 'Data has been added');

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
        $mylist = Mylist::findOrFail($id);
        $movies = Movies::all();
        $user = User::all();
        return view('mylist.edit', compact('mylist', 'movies', 'user'));
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
        //validasi
        $validated = $request->validate([
            'user_id' => 'required',
            'movie_id' => 'required',
        ]);

        $mylist = Mylist::findOrFail($id);
        $mylist->user_id = $request->user_id;
        $mylist->movie_id = $request->movie_id;
        $mylist->save();
        return redirect()
            ->route('mylist.index')->with('toast_info', 'Data has been edited');
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
        return redirect()
            ->route('mylist.index')->with('toast_error', 'Data has been deleted');
    }
}
