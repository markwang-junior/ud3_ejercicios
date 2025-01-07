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
        // Solo modificamos la tabla 'alumnos', en vez de volver a crearla
        Schema::table('alumnos', function (Blueprint $table) {
            // Ejemplo: añadimos una columna 'telefono'
            $table->string('telefono')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // En el rollback, quitamos la columna que añadimos
        Schema::table('alumnos', function (Blueprint $table) {
            $table->dropColumn('telefono');
        });
    }
};
