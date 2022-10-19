<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('iniciomenu');
    }
    public function verUsuarios(){
        return view('cargarUsuario');
    }
}
