<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('alistamientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solicitud_id')->unique()->constrained('solicitudes')->restrictOnDelete();
            $table->foreignId('tractor_id')->constrained('tractores')->restrictOnDelete();
            $table->foreignId('unidad_id')->constrained('unidades')->restrictOnDelete();
            $table->timestamp('fecha_alistamiento');
            $table->decimal('horas_trabajadas', 8, 2);
            $table->decimal('acpm_inicial_gal', 8, 2);
            $table->decimal('acpm_final_gal', 8, 2);
            $table->decimal('consumo_gal', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alistamientos');
    }
};
