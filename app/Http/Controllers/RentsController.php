<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rent;
use App\User;
use App\Movie;
use Illuminate\Support\Facades\Auth;

class RentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rents = Rent::orderBy('id', 'DESC')->paginate(5);
        $rents->each(function ($rents){
            $rents->user;
            $rents->movie;

        });
        return view('admin.rents.index')->with('rents', $rents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $movie = Movie::find($request->movie_id);
        $users = User::all()->pluck('dni','id');
        return view('admin.rents.create')->with(['movie' => $movie, 'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rent = new Rent($request->all());
        if($rent->user_id == null){
          $rent->user_id = Auth::user()->id;
        }
        $rent->save();

        $movie = Movie::find($request->movie_id);

        $movie->availables = $movie->availables - 1 ;
        $movie->save();
        flash('El alquiler se registró con éxito')->success();
        if (Auth::user()->type == 'admin') {
          return redirect()->route('rents.index');
        } else {
          return redirect()->route('home.index');
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
