<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        $faker=Faker::create();
        foreach(range(1,10)as $index){
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('secret'),
            ]);

        DB::table('lessons')->insert([
            'word_id' => $faker ->randomDigit,
            'lesson_id' => $faker ->randomDigit,
            'score' => $faker ->numberBetween(1,20),
            ]);
        DB::table('catagories')->insert([
            'category_id' => $faker->unique()->randomDigit,
            'category_name' => $faker ->word,
            ]);
        }
        Model::reguard();
    }
}
