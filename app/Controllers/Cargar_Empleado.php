<?php

namespace App\Controllers;

class Cargar_Empleado extends BaseController
{
    public function index()
    {
        return view('iniciomenu');
    }
    public function verEmpleados(){
        return view('index_empleado');
    }
}