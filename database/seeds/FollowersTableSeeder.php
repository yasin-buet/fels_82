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
        DB::table('followers')->insert([[
            'follower_id' => 1,
            'following_id' => 2,
        ],
        [
            'follower_id' => 1,
            'following_id' => 3,
        ],
        [
            'follower_id' => 1,
            'following_id' => 4,
        ],
        [
            'follower_id' => 2,
            'following_id' => 3,
        ],
        [
            'follower_id' => 2,
            'following_id' => 4,
        ],
        [
            'follower_id' => 3,
            'following_id' => 4,
        ],
        [
            'follower_id' => 2,
            'following_id' => 1,
        ],
        [
            'follower_id' => 4,
            'following_id' => 2,
        ],
        [
            'follower_id' => 5,
            'following_id' => 1,
        ],
        [
            'follower_id' => 3,
            'following_id' => 5,
        ],
        [
            'follower_id' => 5,
            'following_id' => 2,
        ],
        [
            'follower_id' => 4,
            'following_id' => 5,
        ]]);
    }
}
