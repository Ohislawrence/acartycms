<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->integer('topic_id');
            $table->string('slug');
            $table->string('title');
            $table->text('lesson');
            $table->enum('is_video', array('0','1'))->default('0');
            $table->enum('is_reading', array('0','1'))->default('0');
            $table->enum('is_quiz', array('0','1'))->default('0');
            $table->enum('is_assignment', array('0','1'))->default('0');
            $table->integer('quiz_id')->nullable();
            $table->string('video_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
};
