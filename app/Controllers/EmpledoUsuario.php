<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EmpleadoUsuarios;
use Kint\Zval\Representation\SourceRepresentation;

class EmpledoUsuario extends Controller{
    public function irInicio(){
        return view('inicio_sesion_empleado');
    }
    public function iniciarSesionEmp(){
        $usuario = $this->request->getVar('txt_usuario');
        $contra = $this->request->getVar('txt_contra');
        
        $sql = "select * from usuarios where usuario='{$usuario}' and contra='{$contra}'";
        //echo $sql;
        
        //conexión de la bd
        $conexion = db_connect();
        //ejecutar sql
        $ejecutar = $conexion->query($sql);
        
        //Obtener catnidad de registros
        $cantidad = $ejecutar->getNumRows();
        //echo "<br>Cantidad de registros: ". $cantidad;

        if($cantidad>0){
            $usuario = $ejecutar->getRow(0);
            //echo "Tipo de usuario: ". $usuario->tipousuario_id;
            
            if($usuario->id_tipousuarios==1){
                //ingresa al paquete (carpeta) admin y luego a la vista menu_admin
                return view('index_admin');
            }elseif($usuario->id_tipousuarios==2){
                //ingresa al paquete (carpeta) operador y luego a la vista menu_operador
                return view('index_estudiante');
            }elseif($usuario->id_tipousuarios==3){
                //ingresa al paquete (carpeta) operador y luego a la vista menu_operador
                return view('index_empleado');
            }else{
                return view('inicio_sesion_empleado');
            }
        
        }else{
            //regresar y enviar un mensaje
            return redirect()->back()->with('mensaje','Datos incorrectos');
        }

    }
}