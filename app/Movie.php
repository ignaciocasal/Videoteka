<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  protected $table = "movies"; //nombre de la tabla

  protected $fillable = ['name','duration','availables','trailer','parental_guide_id'];

// para establecer relacion
public function genres(){
      return $this->belongsToMany('App\Genre');
}
public function parental_guide(){
      return $this->belongsTo('App\Parental_guide');
}
}
