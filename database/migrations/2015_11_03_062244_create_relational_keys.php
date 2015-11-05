<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationalKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
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
        //
    }
}
