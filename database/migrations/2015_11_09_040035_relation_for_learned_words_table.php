<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationForLearnedWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('learnedwords', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('learnedwords', function (Blueprint $table) {
            $table->dropForeign('learnedwords_user_id_foreign');
            $table->dropForeign('learnedwords_category_id_foreign');
            $table->dropForeign('learnedwords_question_id_foreign');
        });
    }
}
