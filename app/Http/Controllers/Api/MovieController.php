<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    // per mostrare api di tutti i film in db
    public function index()
    {
        $movies = Movie::all();
        return response()->json($movies);
    } 

    // mostro api del singolo film in db
    public function show(Movie $movie)
    {
        return response()->json($movie);
    }
}
