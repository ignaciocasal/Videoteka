<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table is empty
        if(DB::table('movies')->get()->count() == 0){

            DB::table('movies')->insert([

                [
                    'title' => 'Sueños de Libertad',
                    'duration' => '124',
                    'availables' => '8',
                    'poster' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BODU4MjU4NjIwNl5BMl5BanBnXkFtZTgwMDU2MjEyMDE@._V1_SY1000_CR0,0,672,1000_AL_.jpg',
                    'trailer' => 'https://www.youtube.com/embed/raRbQkJ2pD4',
                    'parental_guide_id' => '2',
                    'slug' => 'suenos-de-libertad',
                ],
                [
                    'title' => 'Batman - El caballero de la noche',
                    'duration' => '142',
                    'availables' => '9',
                    'poster' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_UX182_CR0,0,182,268_AL_.jpg',
                    'trailer' => 'https://www.youtube.com/embed/6aKzEhdCcwo',
                    'parental_guide_id' => '2',
                    'slug' => 'batman-el-caballero-de-la-noche',
                ],
                [
                    'title' => 'El Padrino',
                    'duration' => '149',
                    'availables' => '12',
                    'poster' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BZTRmNjQ1ZDYtNDgzMy00OGE0LWE4N2YtNTkzNWQ5ZDhlNGJmL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_UY268_CR3,0,182,268_AL_.jpg',
                    'trailer' => 'https://www.youtube.com/embed/COQvkUmN6H8',
                    'parental_guide_id' => '3',
                    'slug' => 'el-padrino',
                ],
                [
                    'title' => 'El Padrino II',
                    'duration' => '193',
                    'availables' => '12',
                    'poster' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjZiNzIxNTQtNDc5Zi00YWY1LThkMTctMDgzYjY4YjI1YmQyL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_UY268_CR3,0,182,268_AL_.jpg',
                    'trailer' => 'https://www.youtube.com/embed/rMT8b3MJ-RI',
                    'parental_guide_id' => '3',
                    'slug' => 'el-padrino-ii',
                ],
                [
                    'title' => 'La lista de Schindler',
                    'duration' => '195',
                    'availables' => '6',
                    'poster' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BNDE4OTMxMTctNmRhYy00NWE2LTg3YzItYTk3M2UwOTU5Njg4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_UX182_CR0,0,182,268_AL_.jpg',
                    'trailer' => null,
                    'parental_guide_id' => '3',
                    'slug' => 'la-lista-de-schindler',
                ],
                [
                    'title' => 'Forrest Gump',
                    'duration' => '144',
                    'availables' => '10',
                    'poster' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BYThjM2MwZGMtMzg3Ny00NGRkLWE4M2EtYTBiNWMzOTY0YTI4XkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_UY268_CR10,0,182,268_AL_.jpg',
                    'trailer' => 'https://www.youtube.com/embed/bZ_Un8Pkpuc',
                    'parental_guide_id' => '1',
                    'slug' => 'forrest-gump',
                ],
                [
                    'title' => 'El señor de los anillos: El retorno del rey',
                    'duration' => '192',
                    'availables' => '11',
                    'poster' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BYWY1ZWQ5YjMtMDE0MS00NWIzLWE1M2YtODYzYTk2OTNlYWZmXkEyXkFqcGdeQXVyNDUyOTg3Njg@._V1_UX182_CR0,0,182,268_AL_.jpg',
                    'trailer' => 'https://www.youtube.com/embed/XUkxacUdFkw',
                    'parental_guide_id' => '2',
                    'slug' => 'el-senor-de-los-anillos-el-retorno-del-rey',
                ],
                [
                    'title' => 'El planeta de los simios: La guerra',
                    'duration' => '153',
                    'availables' => '10',
                    'poster' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BOGIxMjIxNDYtOGU5Ny00OWE5LWEwMjEtY2U5NTE0YzY4YTUyXkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_UX182_CR0,0,182,268_AL_.jpg',
                    'trailer' => 'https://www.youtube.com/embed/XUkxacUdFkw',
                    'parental_guide_id' => '2',
                    'slug' => 'el-planeta-de-los-simios-la-guerra',
                ],
                [
                    'title' => 'La momia',
                    'duration' => '110',
                    'availables' => '4',
                    'poster' => null,
                    'trailer' => null,
                    'parental_guide_id' => '2',
                    'slug' => 'la-momia',
                ],
                [
                    'title' => 'Mi villano favorito 3',
                    'duration' => '110',
                    'availables' => '6',
                    'poster' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BNjUyNzQ2MTg3Ml5BMl5BanBnXkFtZTgwNzE4NDM3MTI@._V1_UX182_CR0,0,182,268_AL_.jpg',
                    'trailer' => null,
                    'parental_guide_id' => '1',
                    'slug' => 'mi-villano-favorito-3',
                ]

            ]);

        } else { echo "Table is not empty, therefore NOT \n"; }
    }
}
