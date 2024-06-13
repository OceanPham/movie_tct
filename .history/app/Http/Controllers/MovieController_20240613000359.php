<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $movies = Movie::orderBy('id', 'desc')->get();
        if ($request->has('movie_search')) {
            $name_search = Movie::where('name', '=', $request->input('movie_search'));
            echo $request->input('movie_search');
            print_r($name_search);
            // return View('Home', compact('movies', 'name_search'));
        }
        return View('Home', compact('movies'));

        if ($request->has('movie_search')) {
            $name_search = $request->input('movie_search');
            $movies = Movie::where('name', 'LIKE', '%' . $name_search . '%')->orderBy('id', 'desc')->get();
        } else {
            $movies = Movie::orderBy('id', 'desc')->get();
        }
    
        return view('Home', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
