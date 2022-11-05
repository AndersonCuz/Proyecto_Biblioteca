<?php 
namespace App\Models;

use CodeIgniter\Model;

class EmpleadoUsuarios extends Model{
    protected $table      = 'usuarios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_usuario';
    protected $allowedFields=['id_usuario','usuario','contra','telefono','id_tipousuarios'];
}