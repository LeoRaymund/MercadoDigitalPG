<?php namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model{
protected $table =         'Registro';
protected $primaryKey =    'idregistro';
protected $returnType =    'array';
protected $allowedFields = ['nombre','apellidos','correo','password'];
}
?>

