<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unidad extends Model
{
    use HasFactory;

    protected $table = 'unidades';

    protected $fillable = [
        'nombre',
        'unidad_padre_id',
    ];
}
