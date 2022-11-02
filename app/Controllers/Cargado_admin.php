<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\cargar_opciones;
class Cargado_admin extends Controller{

    public function index()
    {
        return view('iniciomenu');
    }
    public function verAdmin(){
        return view('index_admin');
    }
}