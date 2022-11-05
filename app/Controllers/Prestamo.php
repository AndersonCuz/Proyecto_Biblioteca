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
    public function agregarPrestamo(){
        $presta = new Prestamos();
        $codigo = $this->request->getVar('txt_codigo');
        $libro = $this->request->getVar('txt_libro');
        $carne = $this->request->getVar('txt_carne');
        $prestamo = $this->request->getVar('txt_fecha_prestamo');
        $devolucion = $this->request->getVar('txt_fecha_devolucion');
        $usuario = $this->request->getVar('txt_usuario');
        $empleado = $this->request->getVar('txt_empleado');

        $listaPresta=['id_prestamo'=>$codigo,
        'codigo_libro'=>$libro,
        'carne_alumno'=>$carne,
        'fecha_prestamo'=>$prestamo,
        'fecha_devolucion'=>$devolucion,
        'id_usuario'=>$usuario,
        'codigo_empleado'=>$empleado
        ];

        $presta->insert($listaPresta);
        
        $listaPresta['datopresta']=$presta->findAll();
        return view('lista_prestamos',$listaPresta);
    }
    public function eliminarPrestamo($codigo=null){
        $presta = new Prestamos();
        $presta->delete($codigo);

        $listaPresta['datopresta']=$presta->findAll();
        return view('lista_prestamos',$listaPresta);
    }
    public function verDatosPrestamo($codigo=null){
        $presta = new Prestamos();
        $listaPresta['datopresta']=$presta->where('id_prestamo',$codigo)->first();
        return view('frm_actualizar_prestamo',$listaPresta);
    }
    public function actualizarPrestamo(){
        $presta = new Prestamos();
        $codigo = $this->request->getVar('txt_codigo');
        $libro = $this->request->getVar('txt_libro');
        $carne = $this->request->getVar('txt_carne');
        $prestamo = $this->request->getVar('txt_fecha_prestamo');
        $devolucion = $this->request->getVar('txt_fecha_devolucion');
        $usuario = $this->request->getVar('txt_usuario');
        $empleado = $this->request->getVar('txt_empleado');

        $listaPresta=[
        'codigo_libro'=>$libro,
        'carne_alumno'=>$carne,
        'fecha_prestamo'=>$prestamo,
        'fecha_devolucion'=>$devolucion,
        'id_usuario'=>$usuario,
        'codigo_empleado'=>$empleado
        ];

        $presta->update($codigo,$listaPresta);
        
        $listaPresta['datopresta']=$presta->findAll();
        return view('lista_prestamos',$listaPresta);
    }
}