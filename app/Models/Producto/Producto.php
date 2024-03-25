<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable = [
        'id', 'nombre', 'codigo', 'descripcion', 'precio', 'stock', 'created_at', 'updated_at',
    ];
}
