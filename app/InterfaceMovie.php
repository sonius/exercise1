<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of InterfaceMovie
 *
 * @author Stephen
 */
Interface InterfaceMovie {


    public function retreiveByName($name);
    public function retreiveByNameWithInfo($name);
    

    
}
