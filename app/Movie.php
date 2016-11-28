<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model implements InterfaceMovie {

    protected $table = 'movie';

    public function retreiveByName($name) {

        return self::select('id', 'title')->where('title', $name)->first();
    }

    public function retreiveByNameWithInfo($name) {

        $result = [];
        $movie = $this->retreiveByName($name);
        $result['movie'][] = $movie;        

        
        foreach($movie->Cinemas as $Cinema){
            $CinemaSession = $Cinema->getSessions($movie->id);
            $result['sessions']['cinema_ids'][$Cinema->id]=$CinemaSession;

        }
        
        return $result;

    }

    public function Cinemas() {
        return $this->belongsToMany('App\Cinema', 'cinema_movie');
    }

}
