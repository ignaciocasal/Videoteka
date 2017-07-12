<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'movies';

    /**
     * Run the migrations.
     * @table movies
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 45);
            $table->integer('duration')->nullable();
            $table->integer('availables')->default('0');
            $table->string('trailer', 100)->nullable();
            $table->integer('parental_guide_id')->unsigned();

            $table->foreign('parental_guide_id')
                ->references('id')->on('parental_guides');

            $table->softDeletes();
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
