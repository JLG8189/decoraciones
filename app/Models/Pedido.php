<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = ['cantidad', 'descripcion', 'importe', 'fecha', 'articulo_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function envios()
    {
        return $this->belongsToMany(Envio::class);
    }
}
