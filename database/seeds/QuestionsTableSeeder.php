<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class QuestionsTableSeeder extends Seeder
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
        DB::table('catagories')->insert([
            'id' => $faker->unique()->randomNumber,
            'category_id' => $faker->unique()->randomNumber,
            'english_word'=>$faker->word,
            ]);
    }
  }
}
