<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class calendario extends Model
{
    protected $fillable =[
        'hora',
        'fecha',
        'descripcion',
        'estado',
    ];
};
