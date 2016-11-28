<?php


use Illuminate\Database\Migrations\Migration;

class CreateSessions extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');


        \Schema::create('cinema_session', function($newtable) {
            $newtable->increments('id');
            $newtable->integer('cinema_movie_id')->unsigned();
            $newtable->foreign('cinema_movie_id')->references('id')->on('cinema_movie')->onDelete('cascade');
            $newtable->datetime('session_time');
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
        \Schema::drop('cinema_session');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

}
