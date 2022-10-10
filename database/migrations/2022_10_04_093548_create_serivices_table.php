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
        Schema::create('serivices', function (Blueprint $table) {
            $table->id();
            $table->string('service');
            $table->text('desc');
            $table->string('st1');
            $table->string('st1desc');
            $table->string('st1img');
            $table->string('st2');
            $table->string('st2desc');
            $table->string('stimg');
            $table->text('extra')->nullable();
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
        Schema::dropIfExists('serivices');
    }
};
