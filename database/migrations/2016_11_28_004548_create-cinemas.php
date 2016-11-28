<?php

use Illuminate\Database\Migrations\Migration;

class CreateCinemas extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        \Schema::create('cinema', function($newtable) {

            $newtable->increments('id');
            $newtable->string('name');
            $newtable->string('address');
            $newtable->string('latlong');
            $newtable->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \Schema::drop('cinema');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

}
