<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
  protected $table = "rents"; //nombre de la tabla

  protected $fillable = ['user_id','movie_id','rented_at'];

// para establecer relacion
public function movie(){
      return $this->belongsTo('App\Movies');
}
public function user(){
      return $this->belongsTo('App\User');
}
}
