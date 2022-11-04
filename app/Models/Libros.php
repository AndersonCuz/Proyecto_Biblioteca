<?php 
namespace App\Models;

use CodeIgniter\Model;

class Libros extends Model{
    protected $table      = 'libros';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'codigo_libro';
    protected $allowedFields = ['codigo_libro','codigo_autor','codigo_editorial','titulo','numero_paginas','tamanio','precio','codigo_estado','edicion'];
}