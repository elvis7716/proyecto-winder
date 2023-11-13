<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';
   protected $primaryKey = 'productoID';
   public $timestamps = false;
   protected $fillable =[
    'nombre',
    'descripcion',
    'categoria',
    'precio',
    'stock',
    'foto',
    'fechaRegistro',
    'marca',
   ];
}
