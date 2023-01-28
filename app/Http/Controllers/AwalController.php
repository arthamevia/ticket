<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;

class AwalController extends Controller
{
    public function index(){
        $movies = Movies::all();
        return view('awal', compact('movies'));
    }
}
