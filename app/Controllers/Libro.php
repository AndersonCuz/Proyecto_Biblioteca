<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libros;
use App\Models\Autores;

class Libro extends Controller{

    public function mostrar_libro(){
        $lib = new Libros();
        $listaLibro = $lib->findAll();

        $auto = new Autores();
        $listaAutor['datosAutor'] = $auto->findAll();

        $datoLibro = array('datosLibr'=> $listaLibro,'datoauto'=>$listaAutor);
        return view('lista_libro',$datoLibro);
    }
}