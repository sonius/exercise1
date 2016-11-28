<?php

use Illuminate\Database\Migrations\Migration;

class CreateMovies extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        \Schema::create('movie', function($newtable) {
            $newtable->increments('id');
            $newtable->string('title');
            $newtable->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        \Schema::drop('movie');
    }

}
