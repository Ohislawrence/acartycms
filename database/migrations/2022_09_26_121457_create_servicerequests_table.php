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
        Schema::create('servicerequests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('businessname');
            $table->string('email');
            $table->string('phonenumber');
            $table->string('url');
            $table->string('businesstype');
            $table->string('budget');
            $table->string('country');
            $table->text('details');
            $table->string('datecontacted')->nullable();
            $table->string('contactmethod')->nullable();
            $table->string('won')->nullable();
            $table->string('in_crm')->nullable();
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
        Schema::dropIfExists('servicerequests');
    }
};
