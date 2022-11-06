<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\cargar_opciones;
class Cargado_admin extends Controller{

    public function verAdmin(){
        return view('index_admin');
    }
}