<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        // $movies = Movie::all();
        //SELECT * FROM movie WHERE vote >= 8;
        $movies = Movie::where("vote",">=", 8)->get();
        // dd($movies);
        return view ("home",compact("movies"));
    }
}
