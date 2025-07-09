<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipoVehiculo extends Model
{
    use HasFactory;

    protected $table = 'tipos_vehiculo';

    protected $fillable = [
        'descripcion',
    ];
}
