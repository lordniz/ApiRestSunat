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
            $table->string('ruc')->primary();
            $table->string('nombre_razon_social');
            $table->string('fecha_inicio');
            $table->string('resolucion_sunat');
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
