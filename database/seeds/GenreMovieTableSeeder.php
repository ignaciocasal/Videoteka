<?php

use Illuminate\Database\Seeder;

class GenreMovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table is empty
        if(DB::table('genre_movie')->get()->count() == 0){

            DB::table('genre_movie')->insert([

                [
                    'genre_id' => '7',
                    'movie_id' => '1',
                ],
                [
                    'genre_id' => '28',
                    'movie_id' => '1',
                ],
                [
                    'genre_id' => '10',
                    'movie_id' => '1',
                ],
                [
                    'genre_id' => '22',
                    'movie_id' => '5',
                ],
                [
                    'genre_id' => '7',
                    'movie_id' => '5',
                ],
                [
                    'genre_id' => '31',
                    'movie_id' => '5',
                ],
                [
                    'genre_id' => '27',
                    'movie_id' => '5',
                ],
                [
                    'genre_id' => '1',
                    'movie_id' => '2',
                ],
                [
                    'genre_id' => '8',
                    'movie_id' => '2',
                ],
                [
                    'genre_id' => '10',
                    'movie_id' => '2',
                ],
                [
                    'genre_id' => '7',
                    'movie_id' => '3',
                ],
                [
                    'genre_id' => '28',
                    'movie_id' => '3',
                ],
                [
                    'genre_id' => '7',
                    'movie_id' => '4',
                ],
                [
                    'genre_id' => '28',
                    'movie_id' => '4',
                ],
                [
                    'genre_id' => '5',
                    'movie_id' => '6',
                ],
                [
                    'genre_id' => '7',
                    'movie_id' => '6',
                ],
                [
                    'genre_id' => '31',
                    'movie_id' => '6',
                ],
                [
                    'genre_id' => '2',
                    'movie_id' => '7',
                ],
                [
                    'genre_id' => '8',
                    'movie_id' => '7',
                ],

                [
                    'genre_id' => '1',
                    'movie_id' => '8',
                ],
                [
                    'genre_id' => '2',
                    'movie_id' => '8',
                ],
                [
                    'genre_id' => '4',
                    'movie_id' => '8',
                ],
                [
                    'genre_id' => '10',
                    'movie_id' => '8',
                ],
                [
                    'genre_id' => '2',
                    'movie_id' => '9',
                ],
                [
                    'genre_id' => '8',
                    'movie_id' => '9',
                ],
                [
                    'genre_id' => '10',
                    'movie_id' => '9',
                ],
                [
                    'genre_id' => '11',
                    'movie_id' => '9',
                ],
                [
                    'genre_id' => '17',
                    'movie_id' => '10',
                ],
                [
                    'genre_id' => '2',
                    'movie_id' => '10',
                ],
                [
                    'genre_id' => '5',
                    'movie_id' => '10',
                ],
                [
                    'genre_id' => '13',
                    'movie_id' => '10',
                ],
                [
                    'genre_id' => '28',
                    'movie_id' => '10',
                ],

            ]);

        } else { echo "Table is not empty, therefore NOT \n"; }
    }
}
