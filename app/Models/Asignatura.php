<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = 'asignaturas';

    // Relaciones
    public function notas()
    {
        return $this->hasMany(Nota::class, 'asignatura_id');
    }
}
