<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table is empty
        if(DB::table('genres')->get()->count() == 0){

            DB::table('genres')->insert([
                ['name' => 'Acción',],
                ['name' => 'Aventura',],
                ['name' => 'Catástrofe',],
                ['name' => 'Ciencia Ficción',],
                ['name' => 'Comedia',],
                ['name' => 'Documentales',],
                ['name' => 'Drama',],
                ['name' => 'Fantasía',],
                ['name' => 'Musicales',],
                ['name' => 'Suspenso',],
                ['name' => 'Terror',],
                ['name' => 'Pornográfico',],
                ['name' => 'Infantiles',],
                ['name' => 'Juveniles',],
                ['name' => 'Adultos',],
                ['name' => 'Familiares',],
                ['name' => 'Animadas',],
                ['name' => 'Imágenes Reales',],
                ['name' => 'Mudo',],
                ['name' => '3D',],
                ['name' => 'IMAX',],
                ['name' => 'Bélicas',],
                ['name' => 'Contemporáneas',],
                ['name' => 'Crimen',],
                ['name' => 'Deportivas',],
                ['name' => 'Gangsters',],
                ['name' => 'Históricas',],
                ['name' => 'Policiacas',],
                ['name' => 'Western',],
                ['name' => 'Religioso',],
                ['name' => 'Épicas',],
                ['name' => 'Futuristas',],
            ]);

        } else { echo "Table is not empty, therefore NOT \n"; }

    }
}
