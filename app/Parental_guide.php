<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parental_guide extends Model
{
  protected $fillable = ['name','description'];

  public function movies(){
    return $this->hasMany('App\Movies');
  }
}
