<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Empleados;
class Empleado extends Controller{

    public function mostra_empleado(){
        $emple = new Empleados();
        $listaEmple['datoemple'] = $emple->findAll();
        return view('lista_empleados',$listaEmple);
    }
}