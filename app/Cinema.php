<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model implements InterfaceCinema {

    protected $table = 'cinema';

    public function getList() {
        return self::select('id', 'name')->get();
    }

    public function retreiveById($id) {

        return self::select('id', 'name', 'address', 'latlong')->where('id', $id)->first();
    }

    public function retreiveByName($name) {
        return self::select('id', 'name', 'address', 'latlong')->where('name', $name)->first();
    }



    public function getSessions($movie_id) {
        return CinemaMovie::where('cinema_id', $this->id)->where('movie_id', $movie_id)->join('cinema_session', 'cinema_session.cinema_movie_id', '=', 'cinema_movie.id')->get();
    }

}
