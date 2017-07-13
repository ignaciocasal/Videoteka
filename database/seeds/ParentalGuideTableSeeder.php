<?php

use Illuminate\Database\Seeder;

class ParentalGuideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table is empty
        if(DB::table('parental_guides')->get()->count() == 0){

            DB::table('parental_guides')->insert([

                [
                    'name' => 'G',
                    'description' => 'General Audiences-All Ages Admitted.',
                ],
                [
                    'name' => 'PG',
                    'description' => 'Parental Guidance Suggested. Some Material May Not Be Suitable For Children.',
                ],
                [
                    'name' => 'PG-13',
                    'description' => 'Parents Strongly Cautioned. Some Material May Be Inappropriate For Children Under 13.',
                ],
                [
                    'name' => 'R',
                    'description' => 'Restricted, Under 17 Requires Accompanying Parent Or Adult Guardian.',
                ],
                [
                    'name' => 'NC-17',
                    'description' => 'No One 17 And Under Admitted.',
                ]

            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }


    }
}
