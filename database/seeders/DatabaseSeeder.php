<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // ALUMNOS
        DB::table('alumnos')->insert([
            [
                'nombre' => 'Juan Pérez',
                'email' => 'juan@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'María López',
                'email' => 'maria@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ASIGNATURAS
        DB::table('asignaturas')->insert([
            [
                'nombre' => 'Matemáticas',
                'descripcion' => 'Cálculo y Álgebra',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Lengua',
                'descripcion' => 'Gramática y Literatura',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // NOTAS
        DB::table('notas')->insert([
            [
                'alumno_id' => 1,
                'asignatura_id' => 1,
                'nota' => 8.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'alumno_id' => 1,
                'asignatura_id' => 2,
                'nota' => 7.3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'alumno_id' => 2,
                'asignatura_id' => 1,
                'nota' => 9.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}