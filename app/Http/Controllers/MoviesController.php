<?php

namespace App\Http\Controllers;

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
//            $movies->genres;
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
//        $tags = Tag::orderBy('name', 'ASC')->pluck('name','id');
        return view('admin.movies.create')
            ->with('parental_guides', $parental_guides)
//            ->with('tags', $tags)
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
        $article = new Movie($request->all());
//        $article->user_id = Auth::user()->id;
        $article->save();

//        if ($request->tags_id){
//            $article->tags()->sync($request->tags_id);
//        }

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
//        $my_tags = $article->tags->pluck('id')->toArray();
        $parental_guides = Parental_guide::orderBy('id', 'ASC')->pluck('name','id');
//        $tags = Tag::orderBy('name', 'ASC')->pluck('name','id');
        return view('admin.movies.edit')
            ->with('parental_guides', $parental_guides)
//            ->with('tags', $tags)
            ->with('movie', $movie)
//            ->with('my_tags', $my_tags)
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
        $article = Movie::find($id);
        $article->fill($request->all());
        $article->save();

//        if ($request->tags_id){
//            $article->tags()->sync($request->tags_id);
//        }

        flash('La  película ' .$article->title. ' ha sido editada con exito')->success();
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
        $article = Movie::find($id);
        $article->delete();

        flash('La  película '. $article->name .' se ha eliminado con exito')->success();
        return redirect()->route('movies.index');
    }
}
