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
        Schema::create('journals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('keywards');
            $table->string('abstract');
            $table->date('jdate');
            $table->string('a1fname');
            $table->string('a1lname');
            $table->string('a1affiliation');
            $table->string('a1email');
            $table->string('a2fname');
            $table->string('a2lname');
            $table->string('a2affiliation');
            $table->string('a2email');
            $table->string('a3fname');
            $table->string('a3lname');
            $table->string('a3affiliation');
            $table->string('a3email');
            $table->string('a4fname');
            $table->string('a4lname');
            $table->string('a4affiliation');
            $table->string('a4email');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journals');
    }
};
