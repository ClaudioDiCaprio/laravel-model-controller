<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {

        //SELECT ALL
        
        // $movies = Movie::all();

        //SELECT * FROM movie WHERE vote >= 8;

        // $movies = Movie::where("vote",">=", 8)->get();

        //ORDER BY DESC
        $movies = Movie::where("vote",">=", 8)->orderBy("vote","desc")->get();
        // dd($movies);
        return view ("home",compact("movies"));
    }
}
