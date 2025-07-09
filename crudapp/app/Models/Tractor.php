<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Enums\TractorState;
use App\Models\TipoVehiculo;

class Tractor extends Model
{
    use HasFactory;

    protected $table = 'tractores';

    protected $fillable = [
        'marca',
        'modelo',
        'numero_serial',
        'tipo_vehiculo_id',
        'estado',
    ];

    protected $casts = [
        'estado' => TractorState::class,
    ];

    public function tipo()
    {
        return $this->belongsTo(TipoVehiculo::class, 'tipo_vehiculo_id');
    }
}
