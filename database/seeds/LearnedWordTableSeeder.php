<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class LearnedWordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('learnedwords')->insert([[
            'user_id'=> 1,
            'category_id' => 1,
            'question_id' => 1,
        ],
        [
            'user_id'=> 1,
            'category_id' => 1,
            'question_id' => 2,
        ],
        [
            'user_id'=> 1,
            'category_id' => 2,
            'question_id' => 1,
        ],
        [
            'user_id'=> 1,
            'category_id' => 2,
            'question_id' => 2,
        ],
        [
            'user_id'=> 2,
            'category_id' => 1,
            'question_id' => 1,
        ],
        [
            'user_id'=> 2,
            'category_id' => 1,
            'question_id' => 2,
        ],
        [
            'user_id'=> 2,
            'category_id' => 2,
            'question_id' => 1,
        ],
        [
            'user_id'=> 2,
            'category_id' => 2,
            'question_id' => 2,
        ],
        [
            'user_id'=> 3,
            'category_id' => 1,
            'question_id' => 1,
        ],
        [
            'user_id'=> 3,
            'category_id' => 1,
            'question_id' => 2,
        ],
        [
            'user_id'=> 3,
            'category_id' => 2,
            'question_id' => 1,
        ],
        [
            'user_id'=> 3,
            'category_id' => 2,
            'question_id' => 2,
        ]]);
    }
}
