<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
        Carbon::setLocale('es');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $movies = Movie::search($request->title)->orderBy('id','DESC')->paginate(9);
        $movies->each(function ($movies){
            $movies->genres;
            $movies->parental_guide;
        });
        return view('home')->with('movies', $movies);
    }

    public function searchMoviesFromGenre($name)
    {
        $genre = Genre::searchGenre($name)->first(); //Extraigo el primer elemento de la coleccion para tenerlo como objeto. (Siempre va a traer solo un elemento. El nombre es unico)
        if (is_null($genre)){
            return redirect()->route('home.index');
        }
        $movies = $genre->movies()->orderBy('id','DESC')->paginate(9);
        $movies->each(function ($movies){
            $movies->genres;
            $movies->parental_guide;
        });
        return view('home')
            ->with('movies', $movies)
            ->with('genre', $genre);
    }


    public function viewMovie($slug)
    {
        $movie = Movie::where('slug', $slug)->first();
//        $movie = Movie::findBySlugOrFail($slug);
        if (is_null($movie)){
            return redirect()->route('home.index');
        }
        $movie->genres;
        $movie->parental_guide;

        return view('movie.index')->with('movie', $movie);
    }
}
