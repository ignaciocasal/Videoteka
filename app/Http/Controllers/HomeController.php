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

//    public function searchTag($name)
//    {
//        $tag = Tag::searchTag($name)->first(); //Extraigo el primer elemento de la coleccion para tenerlo como objeto. (Siempre va a traer solo un elemento. El nombre el unico)
//        $articles = $tag->articles()->paginate(5);
//        $articles->each(function ($articles){
//            $articles->category;
//            $articles->user;
//            $articles->images;
//        });
//        return view('home')->with('articles', $articles)
//            ->with('tag', $tag);
//    }

//    public function viewArticle($slug)
//    {
//        $article = Article::findBySlugOrFail($slug);
//        $article->category;
//        $article->user;
//        $article->images;
//        $article->tags;
//
//        return view('article.index')->with('article', $article);
//    }
}
