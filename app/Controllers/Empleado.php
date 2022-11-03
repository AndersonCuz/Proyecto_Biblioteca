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
    public function agregarEmpleado(){
        $emple = new Empleados();
        $codigo = $this->request->getVar('txt_codigo');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $direccion = $this->request->getVar('txt_direccion');
        $email = $this->request->getVar('txt_email');

        $listaEmple=['codigo_empleado'=>$codigo,
        'nombre'=>$nombre,
        'apellido'=>$apellido,
        'direccion'=>$direccion,
        'email'=>$email
        ];

        $emple->insert($listaEmple);

        $listaEmple['datoemple']=$emple->findAll();
        return view('lista_empleados',$listaEmple);
    }
    public function eliminarEmpleado($codigo=null){
        $emple = new Empleados();
        $emple->delete($codigo);

        $listaEmple['datoemple']=$emple->findAll();
        return view('lista_empleados',$listaEmple);
    }
    public function verDatosEmpleado($codigo=null){
        $emple = new Empleados();
        $listaEmple['datoemple']=$emple->where('codigo_empleado',$codigo)->first();
        return view('frm_actualizar_empleado',$listaEmple);
    }
    public function actualizarEmpleado(){
        $emple = new Empleados();
        $codigo = $this->request->getVar('txt_codigo');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $direccion = $this->request->getVar('txt_direccion');
        $email = $this->request->getVar('txt_email');

        $listaEmple=[
        'nombre'=>$nombre,
        'apellido'=>$apellido,
        'direccion'=>$direccion,
        'email'=>$email
        ];

        $emple->update($codigo,$listaEmple);

        $listaEmple['datoemple']=$emple->findAll();
        return view('lista_empleados',$listaEmple);
    }
}