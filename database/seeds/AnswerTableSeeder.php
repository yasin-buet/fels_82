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
        DB::table('answers')->insert([[
            'id' => 1,
            'question_id' => 1,
            'is_correct' => 'true',
            'bengali_meaning'=>str_random(10),
        ],
        [
            'id' => 2,
            'question_id' => 1,
            'is_correct' => 'false',
            'bengali_meaning'=>str_random(10),
        ],
        [
            'id' => 3,
            'question_id' => 1,
            'is_correct' => 'false',
            'bengali_meaning'=>str_random(10),
        ],
        [
            'id' => 4,
            'question_id' => 1,
            'is_correct' => 'false',
            'bengali_meaning'=>str_random(10),
        ],
        [
            'id' => 5,
            'question_id' => 2,
            'is_correct' => 'true',
            'bengali_meaning'=>str_random(10),
        ],
        [
            'id' => 6,
            'question_id' => 2,
            'is_correct' => 'false',
            'bengali_meaning'=>str_random(10),
        ],
        [
            'id' => 7,
            'question_id' => 2,
            'is_correct' => 'false',
            'bengali_meaning'=>str_random(10),
        ],
        [
            'id' => 8,
            'question_id' => 2,
            'is_correct' => 'false',
            'bengali_meaning'=>str_random(10),
        ],
        [
            'id' => 9,
            'question_id' => 3,
            'is_correct' => 'true',
            'bengali_meaning'=>str_random(10),
        ],
        [
            'id' => 10,
            'question_id' => 3,
            'is_correct' => 'false',
            'bengali_meaning'=>str_random(10),
        ],
        [
            'id' => 11,
            'question_id' => 3,
            'is_correct' => 'false',
            'bengali_meaning'=>str_random(10),
        ],
        [
            'id' => 12,
            'question_id' => 3,
            'is_correct' => 'false',
            'bengali_meaning'=>str_random(10),
        ]]);
    }
}
