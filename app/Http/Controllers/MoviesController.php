<?php

namespace App\Http\Controllers;
use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{

    public function index()
    {
        $movies = Movies::all();
        return view ('movies.index')->with('movies', $movies);
    }


    public function create()
    {
        return view('movies.create');
    }


    public function store(Request $request)
    {

         $request->validate([
             'name' =>'required',
             'imdb_rating'=>'required',
         ]);
         Movies::create($request->all());

         return redirect()->route('movies.index');

    }


    public function show($id)
    {
        $movies = Movies::find($id);
        return view('movies.show')->with('movies', $movies);
    }


    public function edit($id)
    {
        $movies = Movies::find($id);
        return view('Movies.edit')->with('movies', $movies);
    }


    public function update(Request $request, $id)
    {
        $movies = Movies::find($id);
        $input = $request->all();
        $movies->update($input);
        return redirect('movies')->with('flash_message', 'Movie Updated!');
    }


    public function destroy($id)
    {
//        Movies::destroy($id);
//        return redirect('movies.index')->with('flash_message', 'Movie deleted!');

        $movies=Movies::find($id);
        $movies->delete();
        return redirect('movies');
    }
}
