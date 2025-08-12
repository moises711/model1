<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    protected $fillable = [
        'descripcion',
        'estado',
        'fecha',
        'hora',
    ];

    protected $dates = ['fecha', 'hora'];

    public function scopeFecha($query, $fecha)
    {
        return $query->where('fecha', $fecha);
    }
}
