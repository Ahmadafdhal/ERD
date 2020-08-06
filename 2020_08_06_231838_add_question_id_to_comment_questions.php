<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuestionIdToCommentQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comment_questions', function (Blueprint $table) {
        $table->unsignedBigInteger('question_id');

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
        Schema::table('comment_questions', function (Blueprint $table) {
            $table->dropForeign(['questions_id']);
            $table->dropColumn(['questions_id']);
        });
    }
}
