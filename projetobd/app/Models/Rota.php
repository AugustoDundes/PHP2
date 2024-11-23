<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rota extends Model
{
    protected $fillable = ['estado-inicio', 'cidade-inicio', 'estado-final', 'cidade-final'];
}
