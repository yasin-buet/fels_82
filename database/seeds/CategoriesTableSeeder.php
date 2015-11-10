<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([[
            'id' => 1,
            'category_name' => str_random(10),
        ],
        [
            'id' => 2,
            'category_name' => str_random(10),
        ],
        [
            'id' => 3,
            'category_name' => str_random(10),
        ],
        [
            'id' => 4,
            'category_name' => str_random(10),
        ],
        [
            'id' => 5,
            'category_name' => str_random(10),
        ]]);
    }
}
