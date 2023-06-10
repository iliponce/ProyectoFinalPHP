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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id()->unique;
            $table->string('nombreProyecto');
            $table->string('fuenteFondos');
            $table->double('montoPlanificado',12,2);
            $table->double('montoPatrocinado',12,2);
            $table->double('montoFondosPropios',12,2);
            $table->timestamp('fecha_creado')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('fecha_modificado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
