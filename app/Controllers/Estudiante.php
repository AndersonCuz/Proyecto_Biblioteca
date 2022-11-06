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
    public function agregarEstudiante(){
        $estu = new Estudiantes();
        $codigo = $this->request->getVar('txt_carne');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $direccion = $this->request->getVar('txt_direccion');
        $telefono = $this->request->getVar('txt_telefono');
        $email = $this->request->getVar('txt_email');

        $listaestu=['carne_alumno'=>$codigo,
        'nombre'=>$nombre,
        'apellido'=>$apellido,
        'direccion'=>$direccion,
        'telefono'=>$telefono,
        'email'=>$email
        ];

        $estu->insert($listaestu);

        $listaestu['datoestudiante']=$estu->findAll();
        return view('lista_estudiantes',$listaestu);
    }
    public function eliminarEstudiante($codigo=null){
        $estu = new Estudiantes();
        $estu->delete($codigo);

        $listaestu['datoestudiante']=$estu->findAll();
        return view('lista_estudiantes',$listaestu);
    }
    public function verDatosEstudiante($codigo=null){
        $estu = new Estudiantes();
        $listaestu['datoestudiante']=$estu->where('carne_alumno',$codigo)->first();
        return view('frm_actualizar_estudiante',$listaestu);
    }
    public function actualizarEstudiante(){
        $estu = new Estudiantes();
        $codigo = $this->request->getVar('txt_carne');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $direccion = $this->request->getVar('txt_direccion');
        $telefono = $this->request->getVar('txt_telefono');
        $email = $this->request->getVar('txt_email');

        $listaestu=[
        'nombre'=>$nombre,
        'apellido'=>$apellido,
        'direccion'=>$direccion,
        'telefono'=>$telefono,
        'email'=>$email
        ];

        $estu->update($codigo,$listaestu);

        $listaestu['datoestudiante']=$estu->findAll();
        return view('lista_estudiantes',$listaestu);
    }
}