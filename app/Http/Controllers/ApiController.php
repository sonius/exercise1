<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database;

class ApiController extends BaseController {

    private $response;
    private $Cinema;
    private $Movie;

    public function __construct(\App\InterfaceCinema $Cinema, \App\InterfaceMovie $Movie) {

        $this->response = new \stdClass();
        $this->setSuccess(true);
        $this->setData('');

        $this->Cinema = $Cinema;
        $this->Movie = $Movie;
    }

    function listCinemas() {

        try {

            $Cinemas = $this->Cinema->getList();

            $this->setData($Cinemas);

            //make call to retrieve all cinemas
        } catch (Exception $ex) {
            $this->setSuccess(false);
            $this->setData($ex->getMessage());
        }

//        return  \Response::json($this->response);
        return $this->makeResonse();
    }

    function getCinema($name) {

        try {

            $Cinema = $this->Cinema->retreiveByName(urldecode($name));
            $this->setData($Cinema);

            //make call to get cinema 
        } catch (Exception $ex) {
            $this->setSuccess(false);
            $this->setData($ex->getMessage());
        }

        return $this->makeResonse();
    }
    function getMovie($name) {

        try {

            $Movie = $this->Movie->retreiveByNameWithInfo(urldecode($name));
            $this->setData($Movie);

            //make call to get cinema 
        } catch (Exception $ex) {
            $this->setSuccess(false);
            $this->setData($ex->getMessage());
        }

        return $this->makeResonse();
    }

    private function setSuccess($val) {
        $this->response->success = $val;
    }

    private function setData($val) {
        $this->response->data = $val;
    }

    private function makeResonse() {
        return \Response::json($this->response);
//        return json_encode($this->response, JSON_PRETTY_PRINT);
    }

}
