<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CinemaMovie extends Model {

    protected $table = 'cinema_movie';


    
        public function CinemasSessions() {
        return $this->belongsToMany('App\CinemaMovie', 'cinema_session');
    }

    

}
