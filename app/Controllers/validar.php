<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class validar extends Controller
{
  public function entrarSesiones()
  {
    include('base.php');
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];

    $conexion = mysqli_connect("localhost", "root", "", "bd_biblioteca");

    $consulta = "SELECT*FROM usuarios where usuario ='$usuario' and contra='$contra'";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_fetch_array($resultado);

    if ($filas > 0) {

      if ($filas['id_usuario'] == 1) {

        return view('index_admin');
        
      } elseif ($filas['id_usuario'] == 2) {

        return view('index_estudiante');

      } elseif ($filas['id_usuario'] == 3) {

        return view('index_empleado');
      }
      //else{
      //return view('cargarUsuario');
      //}
    } else {
      return view('cargarUsuario');
      echo "usuario o contraseña incorrectos";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
  }
}
