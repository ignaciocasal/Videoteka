<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    protected $table = "movies"; //nombre de la tabla

    protected $fillable = ['name','duration','availables','trailer','parental_guide_id'];

    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    // para establecer relacion
        public function genres(){
          return $this->belongsToMany('App\Genre');
    }
        public function parental_guide(){
          return $this->belongsTo('App\Parental_guide');
    }
}
