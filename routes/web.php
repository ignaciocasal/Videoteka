<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',[
    'uses'  => 'HomeController@index',
    'as'    => 'home.index'
]);

Route::get('genres/{name}', [
    'uses'  => 'HomeController@searchMoviesFromGenre',
    'as'    => 'home.search.movies.from.genre'
]);


Route::get('movies/{slug}', [
    'uses'  => 'HomeController@viewMovie',
    'as'    => 'home.view.movie'
]);

Route::get('rents', [
    'uses'  => 'UsersController@rentsHistory',
    'as'    => 'rents.my_rents'
]);


Route::group(['prefix' => 'admin','middleware' => 'auth'],function(){
    Route::resource('users','UsersController');
    Route::get('users/{id}/destroy', [
        'uses' => 'UsersController@destroy',
        'as' => 'users.destroy'
    ]);
    Route::get('users/{user}/rents', [
        'uses'  => 'UsersController@rentsHistory',
        'as'    => 'users.rents'
    ]);

    Route::resource('movies','MoviesController');
    Route::get('movies/{id}/destroy',[
        'uses' => 'MoviesController@destroy',
        'as' => 'movies.destroy'
    ]);
    Route::resource('rents','RentsController', ['except' => [
        'create', 'destroy', 'show'
    ]]);
    Route::get('rents/{movie_id}/create',[
        'uses' => 'RentsController@create',
        'as' => 'rents.create'
    ]);
    Route::get('rents/{rent_id}/updateDev',[
        'uses' => 'RentsController@updateDev',
        'as' => 'rents.updateDev'
    ]);
    Route::get('rents/{id}/destroy',[
        'uses' => 'RentsController@destroy',
        'as' => 'rents.destroy'
    ]);
    Route::resource('genres','GenresController');
    Route::get('genres/{id}/destroy', [
        'uses'  => 'GenresController@destroy',
        'as'    => 'genres.destroy'
    ]);

});
