<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  protected $table = "genres"; //nombre de la tabla

protected $fillable = ['name'];

// para establecer relacion
public function movies(){
      return $this->belongsToMany('App\Movie');
}
}
