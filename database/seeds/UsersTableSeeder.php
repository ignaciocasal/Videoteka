<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table is empty
        if(DB::table('users')->get()->count() == 0){

            DB::table('users')->insert([
                [
                    'name' => 'Luis',
                    'lastname' => 'Aguirre',
                    'dni' => '22458735',
                    'email' => 'admin@admin.com',
                    'phone' => '2974334587',
                    'password' => bcrypt('admin1'),
                    'type' => 'admin',
                ],
            ]);

        } else { echo "Table is not empty, therefore NOT \n"; }


    }
}
