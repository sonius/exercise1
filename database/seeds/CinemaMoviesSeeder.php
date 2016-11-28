<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CinemaMoviesSeeder
 *
 * @author Stephen
 */
class CinemaMoviesSeeder extends \Illuminate\Database\Seeder {

    public function run() {

        $faker = Faker\Factory::create();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Cinema::truncate();
        \App\Movie::truncate();
        \App\CinemaMovie::truncate();
        \App\CinemaSession::truncate();


        for ($x = 1; $x <= 10; $x++) {
            $Cinema = new \App\Cinema();
            $Cinema->name = 'The ' . $faker->name . ' Cinema';
            $Cinema->address = $faker->address;
            $Cinema->latlong = $faker->latitude . '/' . $faker->longitude;
            $Cinema->save();

            $Movie = new \App\Movie();
            $Movie->title = 'A ' . $faker->colorName . ' ' . $faker->word . ' in the ' . $faker->city;
            $Movie->save();

            $CinemaMovie = new App\CinemaMovie();
            $CinemaMovie->cinema_id = $x;
            $CinemaMovie->movie_id = $x;
            $CinemaMovie->save();

            $CinemaSession = new App\CinemaSession();

            $CinemaSession->cinema_movie_id = $x;
            $CinemaSession->session_time = $faker->dateTimeBetween($startDate = 'now', $endDate = '+3 weeks');
            $CinemaSession->save();
        }


        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

//put your code here
}
