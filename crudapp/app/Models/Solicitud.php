<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Enums\SolicitudState;

class Solicitud extends Model
{
    use HasFactory;

    protected $table = 'solicitudes';

    protected $fillable = [
        'fecha_solicitud',
        'usuario_id',
        'cargo',
        'actividad',
        'implemento_id',
        'observaciones',
        'estado',
    ];

    protected $casts = [
        'estado' => SolicitudState::class,
    ];
}
