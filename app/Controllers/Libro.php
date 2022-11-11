<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libros;
use App\Models\Autores;

class Libro extends Controller{

    public function mostrar_libro(){
        $lib = new Libros();
        $listaLibro['datosLibr']=$lib->findAll();
        return view('lista_libro',$listaLibro);
    }
    public function agregarLibro(){
        $lib = new Libros();
        $codigo = $this->request->getVar('txt_codigo');
        $autor = $this->request->getVar('txt_autor');
        $editorial = $this->request->getVar('txt_editorial');
        $titulo = $this->request->getVar('txt_titulo');
        $pagina = $this->request->getVar('txt_paginas');
        $tamanio = $this->request->getVar('txt_tamanio');
        $precio = $this->request->getVar('txt_precio');
        $estado = $this->request->getVar('txt_estado');
        $edicion = $this->request->getVar('txt_edicion');

        $listaLibro=['codigo_libro'=>$codigo,
        'codigo_autor'=>$autor,
        'codigo_editorial'=>$editorial,
        'titulo'=>$titulo,
        'numero_paginas'=>$pagina,
        'tamanio'=>$tamanio,
        'precio'=>$precio,
        'codigo_estado'=>$estado,
        'edicion'=>$edicion
        ];

        $lib->insert($listaLibro);
        
        $listaLibro['datosLibr']=$lib->findAll();
        return view('lista_libro',$listaLibro);
    }
    public function eliminarLibro($codigo=null){
        $lib = new Libros();
        $lib->delete($codigo);

        $listaLibro['datosLibr']=$lib->findAll();
        return view('lista_libro',$listaLibro);
    }
    public function actualizarLibro(){
        $lib = new Libros();
        $codigo = $this->request->getVar('txt_codigo');
        $autor = $this->request->getVar('txt_autor');
        $editorial = $this->request->getVar('txt_editorial');
        $titulo = $this->request->getVar('txt_titulo');
        $pagina = $this->request->getVar('txt_paginas');
        $tamanio = $this->request->getVar('txt_tamanio');
        $precio = $this->request->getVar('txt_precio');
        $estado = $this->request->getVar('txt_estado');
        $edicion = $this->request->getVar('txt_edicion');

        $listaLibro=[
        'codigo_autor'=>$autor,
        'codigo_editorial'=>$editorial,
        'titulo'=>$titulo,
        'numero_paginas'=>$pagina,
        'tamanio'=>$tamanio,
        'precio'=>$precio,
        'codigo_estado'=>$estado,
        'edicion'=>$edicion
        ];

        $lib->update($codigo,$listaLibro);
        
        $listaLibro['datosLibr']=$lib->findAll();
        return view('lista_libro',$listaLibro);
    }
}