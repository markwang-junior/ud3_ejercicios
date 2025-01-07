<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $table = 'notas';

    // Relaciones
    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'alumno_id');
    }

    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class, 'asignatura_id');
    }
}
