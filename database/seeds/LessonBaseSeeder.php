<?php

use Illuminate\Database\Seeder;

class LessonBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessonbase')->insert([[
            'question_id' => 1,
            'lesson_id'=> 1,
        ],
        [
            'question_id' => 2,
            'lesson_id'=> 1,
        ],
        [
            'question_id' => 3,
            'lesson_id'=> 2,
        ],
        [
            'question_id' => 4,
            'lesson_id'=> 2,
        ],
        [
            'question_id' => 5,
            'lesson_id'=> 3,
        ],
        [
            'question_id' => 6,
            'lesson_id'=> 3,
        ],
        [
            'question_id' => 7,
            'lesson_id'=> 4,
        ],
        [
            'question_id' => 8,
            'lesson_id'=> 4,
        ]]);
    }
}
