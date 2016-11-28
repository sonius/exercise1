<?php


use Illuminate\Database\Migrations\Migration;

class CreateCinemaMovies extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        
                DB::statement('SET FOREIGN_KEY_CHECKS=0;');
                
        \Schema::create('cinema_movie', function($newtable) {
            $newtable->increments('id');
            $newtable->integer('cinema_id')->unsigned();
            $newtable->foreign('cinema_id')->references('id')->on('cinema')->onDelete('cascade');
            $newtable->integer('movie_id')->unsigned();
            $newtable->foreign('movie_id')->references('id')->on('movie')->onDelete('cascade');
            $newtable->timestamps();
        });
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \Schema::drop('cinema_movie');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

}
