<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_solicitud');
            $table->foreignId('usuario_id')->constrained('users')->restrictOnDelete();
            $table->string('cargo');
            $table->string('actividad');
            $table->foreignId('implemento_id')->constrained('implementos')->restrictOnDelete();
            $table->text('observaciones')->nullable();
            $table->string('estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
};
