<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
            foreach(range(1,10)as $index){
                DB::table('lessons')->insert([
                    'id' => $faker ->unique()->randomNumber,
                    'word_id' => $faker ->randomDigit,
                    'score' => $faker ->numberBetween(1,20),
                ]);
            }
       }
}
