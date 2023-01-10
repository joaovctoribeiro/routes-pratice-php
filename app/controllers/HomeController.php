<?php

namespace app\controllers;

class HomeController 
{
     public function index($params) {
        var_dump($params->name);
        return Controller::view('home');
     }
}