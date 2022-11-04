<?php 
namespace App\Models;

use CodeIgniter\Model;

class Autores extends Model{
    protected $table      = 'autores';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'codigo_autor';
    protected $allowedFields = ['codigo_autor','apellido','nombre','nacionalidad'];
}