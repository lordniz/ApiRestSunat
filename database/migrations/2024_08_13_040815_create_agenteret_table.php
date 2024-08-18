<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agenteret', function (Blueprint $table) {
            $table->id();
            $table->string('ruc');
            $table->string('nombre_razon_social');
            $table->date('fecha_inicio');//ejemplo(01/10/2023)
            $table->string('resolucion_sunat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenteret');
    }
};
