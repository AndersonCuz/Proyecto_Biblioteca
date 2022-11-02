<?php 
namespace App\Models;

use CodeIgniter\Model;

class Empleados extends Model{
    protected $table      = 'empleados';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'codigo_empleado';
    protected $allowedFields = ['codigo_empleado','nombre','apellido','direccion','email'];
}