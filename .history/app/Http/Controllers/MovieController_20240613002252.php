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
        $movies = Movie::all();
        if ($request->has('movie_search')) {
            $name_search = $request->input('movie_search');
            $movies_search = Movie::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($name_search) . '%'])->get();
            return View('Home', compact('movies', 'movies_search'));
        }
        return View('Home', compact('movies'));

        // if ($request->has('movie_search')) {
        //     $name_search = $request->input('movie_search');
        //     $movies = Movie::where('name', 'LIKE', '%' . $name_search . '%')->orderBy('id', 'desc')->get();
        // } else {
        //     $movies = Movie::orderBy('id', 'desc')->get();
        // }

        // return view('Home', compact('movies'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Movie $movie)
    {
        //
    }

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
