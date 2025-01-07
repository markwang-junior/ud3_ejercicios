<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    // Tabla asociada (opcional si se cumple convención)
    protected $table = 'alumnos';

    // Si no tienes timestamps en la tabla, pon esto a false
    // public $timestamps = true; // (por defecto es true si tienes created_at y updated_at)

    // Relaciones
    public function notas()
    {
        return $this->hasMany(Nota::class, 'alumno_id');
    }
}
