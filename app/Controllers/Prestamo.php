<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Prestamos;
class Prestamo extends Controller{

    public function mostrar_prestamo(){
        $presta= new Prestamos();
        $listaPresta['datopresta']= $presta->findAll();
        return view('lista_prestamos',$listaPresta);
    }
}