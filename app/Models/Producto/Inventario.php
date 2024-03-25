<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $table = 'inventarios';
    protected $fillable = [
        'id', 'stock', 'producto_id', 'created_at', 'updated_at',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id')->withDefault();
    }
}
