<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->foreignId('unidad_padre_id')->nullable()->constrained('unidades')->restrictOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('unidades');
    }
};
