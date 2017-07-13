<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use App\Parental_guide;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $movies = Movie::search($request->title)->orderBy('id', 'DESC')->paginate(7);
        $movies->each(function ($movies){
            $movies->genres;
            $movies->parental_guide;
        });
        return view('admin.movies.index')->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parental_guides = Parental_guide::orderBy('id', 'ASC')->pluck('name','id');
        $genres = Genre::orderBy('name', 'ASC')->pluck('name','id');
        return view('admin.movies.create')
            ->with('parental_guides', $parental_guides)
            ->with('genres', $genres)
            ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie($request->all());
//        $article->user_id = Auth::user()->id;
        $movie->save();

        if ($request->genres_id){
            $movie->genres()->sync($request->genres_id);
        }

        flash('La película se ha creado con exito')->success();
        return redirect()->route('movies.index');
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
        $movie = Movie::find($id);
        $movie->parental_guide;
        $my_genres = $movie->genres->pluck('id')->toArray();
        $parental_guides = Parental_guide::orderBy('id', 'ASC')->pluck('name','id');
        $genres = Genre::orderBy('name', 'ASC')->pluck('name','id');
        return view('admin.movies.edit')
            ->with('parental_guides', $parental_guides)
            ->with('genres', $genres)
            ->with('movie', $movie)
            ->with('my_genres', $my_genres)
            ;
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
        $movie = Movie::find($id);
        $movie->fill($request->all());
        $movie->save();

        if ($request->genres_id){
            $movie->genres()->sync($request->genres_id);
        }

        flash('La  película ' .$movie->title. ' ha sido editada con exito')->success();
        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        flash('La  película '. $movie->title .' se ha eliminado con exito')->success();
        return redirect()->route('movies.index');
    }
}
