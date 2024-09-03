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
        Schema::create('ruc', function (Blueprint $table) {
            $table->string('ruc')->primary();
            $table->string('ubigeo');
            $table->string('tipo_via')->nullable();
            $table->string('nombre_via')->nullable();
            $table->string('codigo_zona')->nullable();
            $table->string('tipo_zona')->nullable();
            $table->string('numero')->nullable();
            $table->string('kilometro')->nullable();
            $table->string('interior')->nullable();
            $table->string('lote')->nullable();
            $table->string('departamento')->nullable();
            $table->string('manzana')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruc');
    }
};
