<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    // Indica qué campos se pueden llenar masivamente (ejemplo)
    protected $fillable = [
        'product_id',
        'user_id',
        'cantidad',
        'total_price',
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
