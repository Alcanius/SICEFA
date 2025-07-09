<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alistamiento extends Model
{
    use HasFactory;

    protected $table = 'alistamientos';

    protected $fillable = [
        'solicitud_id',
        'tractor_id',
        'unidad_id',
        'fecha_alistamiento',
        'horas_trabajadas',
        'acpm_inicial_gal',
        'acpm_final_gal',
        'consumo_gal',
    ];
}
