<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Cliente extends Model

{
    protected $table = 'clientes';

    protected $fillable = [

        'nombre',
        'email',
        'telefono',
    ];

    /**
     * Relación: un cliente puede tener muchas órdenes.
     */
    public function ordenes(): HasMany
    {
        return $this->hasMany(Product::class, 'cliente_id');
    }
}
