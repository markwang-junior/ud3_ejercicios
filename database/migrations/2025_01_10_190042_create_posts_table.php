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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();                    // PK del post
            $table->unsignedBigInteger('usuario_id'); // FK a alumnos.id
            $table->string('titulo');
            $table->text('contenido')->nullable();
            $table->timestamps();

            $table->foreign('usuario_id')
                ->references('id')
                ->on('alumnos')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        // Aquí deshaces lo que hiciste en up()
        Schema::dropIfExists('posts');
    }

};
