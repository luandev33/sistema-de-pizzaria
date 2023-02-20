<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidodia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sabor',
        'borda',
        'hora',
        'dincar',
        'entrtegaretirada',
        'valor'
    ];
}
