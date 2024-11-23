<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rota extends Model
{
    protected $fillable = ['estado_inicio', 'cidade_inicio', 'estado_final', 'cidade_final'];
}
