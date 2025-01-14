<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfiles';

    // Relación 1:1 inversa con Alumno
    public function alumno()
    {
        // belongsTo(Clase, 'FK', 'local_PK')
        return $this->belongsTo(Alumno::class, 'usuario_id', 'id');
    }
}
