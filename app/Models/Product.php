<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'categoria',
        'imagen',
        'codigo',
        'marca',
        'modelo',
        'color',
        'descripcion',
        'precio',
        'stock',
    ];
}
