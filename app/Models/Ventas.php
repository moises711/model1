<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    // Indica qué campos se pueden llenar masivamente (ejemplo)
    protected $fillable = [
        'product_id',
        'fecha_id', // Cambiado de 'fecha' a 'fecha_id' para reflejar la relación con calendario
        'user_id',
        'cantidad',
        'total',
    ];

    // Relación con productos (ejemplo: una venta pertenece a un producto)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Relación con usuarios (ejemplo: una venta pertenece a un usuario)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
