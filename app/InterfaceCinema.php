<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of InterfaceCinema
 *
 * @author Stephen
 */
Interface InterfaceCinema {

    public function getList();

    public function retreiveById($id);

    public function retreiveByName($name);
    
    public function getSessions($movie_id);
    

    
}
