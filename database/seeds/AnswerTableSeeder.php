<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class AnswerTableSeeder extends Seeder
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
        DB::table('answers')->insert([
            'id' => $faker->unique()->randomNumber,
            'question_id' => $faker->unique()->randomNumber,
            'bengali_meaning'=>$faker->word,
            ]);
    }
 }
}
