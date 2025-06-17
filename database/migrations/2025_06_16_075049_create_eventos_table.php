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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->dateTime('fecha');
            $table->enum('estado', ['activo', 'cancelado', 'finalizado'])->default('activo');
            $table->string('auditorio');
            $table->text('descripcion')->nullable();
            $table->string('imagen')->nullable();
            $table->timestamps();
        });
        Schema::dropIfExists('concerts'); // Eliminar la tabla 'concerts' si existe
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
        // Do nothing for 'concerts' as it is already dropped in the up method
    }
};
