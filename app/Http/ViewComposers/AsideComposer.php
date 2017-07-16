<?php

namespace App\Http\ViewComposers;

use App\Article;
use App\Category;
use App\Genre;
use App\Tag;
use Illuminate\View\View;
//use App\Repositories\UserRepository;

class AsideComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $genres = Genre::orderBy('name','ASC')->get();
        $view->with('genres', $genres);
    }
}