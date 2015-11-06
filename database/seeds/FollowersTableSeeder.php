<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class FollowersTableSeeder extends Seeder
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
        DB::table('followers')->insert([
            'follower_id' => $faker->unique()->randomNumber,
            'following_id'=>$faker->unique()->randomNumber,
            ]);
      }
  }
}
