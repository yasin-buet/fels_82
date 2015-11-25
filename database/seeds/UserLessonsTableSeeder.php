<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserLessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_lessons')->insert([[
            'user_id' => 1,
            'lesson_id'=> 1,
            'score'=>0,
        ],
        [
            'user_id' => 1,
            'lesson_id'=> 2,
            'score'=>0,
        ],
        [
            'user_id' => 2,
            'lesson_id'=> 1,
            'score'=>0,
        ],
        [
            'user_id' => 2,
            'lesson_id'=> 2,
            'score'=>0,
        ]]);
    }
}