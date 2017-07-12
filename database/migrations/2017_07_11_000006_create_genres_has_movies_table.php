<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresHasMoviesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'genres_has_movies';

    /**
     * Run the migrations.
     * @table genres_has_movies
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('genre_id')->unsigned();
            $table->integer('movie_id')->unsigned();

            $table->foreign('genre_id')
                ->references('id')->on('genres')
                ->onDelete('cascade');


            $table->foreign('movie_id')
                ->references('id')->on('movies')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
