<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearnedWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learnedwords', function ( $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('word_id');
        });

        Schema::table('learnedwords',function(Blueprint $table)
        {
             $table->foreign('category_id')->references('category_id')->on('catagories');
             $table->foreign('user_id')->references('id')->on('users');
             $table->foreign('word_id')->references('word_id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('learnedwords');
    }
}
