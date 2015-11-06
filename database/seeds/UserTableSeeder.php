<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
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
                DB::table('users')->insert([
                'id' => $faker->unique()->randomNumber,
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
          ]);
      }
    }
}
