<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Estudiantes;
class Estudiante extends Controller{
    public function mostrar_estudiante(){
        $estu = new Estudiantes();
        $listaestu['datoestudiante'] = $estu->findAll();
        return view('lista_estudiantes',$listaestu);
    }
}