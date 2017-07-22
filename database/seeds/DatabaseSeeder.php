<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ParentalGuideTableSeeder::class);
         $this->call(GenresTableSeeder::class);
         $this->call(MoviesTableSeeder::class);
         $this->call(GenreMovieTableSeeder::class);
         $this->call(UsersTableSeeder::class);
    }
}
