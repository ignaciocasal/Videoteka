<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    protected $table = "genres"; //nombre de la tabla

    protected $fillable = ['name'];

    public $timestamps = false;


    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    // para establecer relacion
    public function movies(){
          return $this->belongsToMany('App\Movie');
    }

    //scope de busqueda
    public function scopeSearch($query, $name){
        return $query->where('name', 'LIKE', '%'.$name.'%' );
    }

//    public function scopeSearchGenre($query, $name){
//        return $query->where('name', '=', $name);
//    }
}
