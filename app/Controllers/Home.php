<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function inicio(){
        return view('inicio');
    }
    public function formulario(){
        return view('formuario');
    }
    public function servicios(){
        return view('servicios');
    }
    public function admin(){
        return view('admin');
    }
}
