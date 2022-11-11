<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libros2;
class Libro2 extends Controller{
    public function mostrar_libro2(){
        $lib = new Libros2();
        $listaLibro2['datosLibr']=$lib->findAll();
        return view('lista_libro2',$listaLibro2);
    }
}