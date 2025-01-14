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
    Schema::create('perfiles', function (Blueprint $table) {
        $table->id(); // PK del perfil
        // Clave foránea que apunta a 'alumnos.id'
        $table->unsignedBigInteger('usuario_id')->unique();
        // Para indicar la biografía del alumno
        $table->text('biografia')->nullable();
        $table->timestamps();

        // Definimos la FK
        $table->foreign('usuario_id')
              ->references('id')
              ->on('alumnos')
              ->onDelete('cascade');
    });
}

};
