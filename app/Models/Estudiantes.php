<?php 
namespace App\Models;

use CodeIgniter\Model;

class Estudiantes extends Model{
    protected $table      = 'estudiantes';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'carne_alumno';
     protected $allowedFields = ['carne_alumno','nombre','apellido','direccion','telefono','email'];
}