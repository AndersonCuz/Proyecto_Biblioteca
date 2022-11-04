<?php

namespace App\Controllers;

class Cargado_Estudiante extends BaseController
{
    public function index()
    {
        return view('iniciomenu');
    }
    public function verEstudiante(){
        return view('index_estudiante');
    }
}