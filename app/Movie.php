<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    protected $table = "movies"; //nombre de la tabla

    protected $fillable = ['title','duration','availables','poster', 'trailer','parental_guide_id'];

    public $timestamps = false; //desactivar los timestamps

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

    //scope de busqueda
    public function scopeSearch($query, $title){
        return $query->where('title', 'LIKE', '%'.$title.'%' );
    }
}
