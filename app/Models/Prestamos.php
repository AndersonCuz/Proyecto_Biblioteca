<?php 
namespace App\Models;

use CodeIgniter\Model;

class Prestamos extends Model{
    protected $table      = 'prestamos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_prestamo';
    protected $allowedFields = ['id_prestamo','codigo_libro','carne_alumno','fecha_prestamo','fecha_devolucion','id_usuario','codigo_empleado'];
}