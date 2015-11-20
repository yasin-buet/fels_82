<?php

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([[
            'id'=> 1,
            'category_id' => 1,
        ],
        [
            'id'=> 2,
            'category_id' => 2,
        ],
        [
            'id'=> 3,
            'category_id' => 4,
        ],
        [
            'id'=> 4,
            'category_id' => 3,
        ],
        [
            'id'=> 5,
            'category_id' => 1,
        ],
        [
            'id'=> 6,
            'category_id' => 3,
        ],
        [
            'id'=> 7,
            'category_id' => 5,
        ]
        ]);
    }
}