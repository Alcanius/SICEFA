<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Implemento extends Model
{
    use HasFactory;

    protected $table = 'implementos';

    protected $fillable = [
        'descripcion',
        'categoria',
        'estado',
    ];
}
