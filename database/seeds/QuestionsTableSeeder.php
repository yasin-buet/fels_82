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
        DB::table('questions')->insert([[
            'id'=> 1,
            'category_id' => 1,
            'english_word'=> str_random(10),
        ],
        [
            'id'=> 2,
            'category_id' => 1,
            'english_word'=> str_random(10),
        ],
        [
            'id'=> 3,
            'category_id' => 1,
            'english_word'=> str_random(10),
        ],
        [
            'id'=> 4,
            'category_id' => 1,
            'english_word'=> str_random(10),
        ],
        [
            'id'=> 5,
            'category_id' => 2,
            'english_word'=> str_random(10),
        ],
        [
            'id'=> 6,
            'category_id' => 2,
            'english_word'=> str_random(10),
        ],
        [
            'id'=> 7,
            'category_id' => 2,
            'english_word'=> str_random(10),
        ],
        [
            'id'=> 8,
            'category_id' => 2,
            'english_word'=> str_random(10),
        ],
        [
            'id'=> 9,
            'category_id' => 3,
            'english_word'=> str_random(10),
        ],
        [
            'id'=> 10,
            'category_id' => 3,
            'english_word'=> str_random(10),
        ],
        [
            'id'=> 11,
            'category_id' => 3,
            'english_word'=> str_random(10),
        ],
        [
            'id'=> 12,
            'category_id' => 3,
            'english_word'=> str_random(10),
        ]]);
    }
}
