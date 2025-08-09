<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Product;
class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        // agrega aquí los campos que quieras permitir
    ];

    // Si la tabla en la base de datos tiene un nombre diferente
    // protected $table = 'categorias';

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}