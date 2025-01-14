<?php

// app/Models/Alumno.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    // (Opcional si el nombre de la tabla es "alumnos")
    protected $table = 'alumnos';

    protected $fillable = ['nombre', 'email'];

    // Relaciones
    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    public function perfil()
    {
        // hasOne(Clase, 'FK', 'local_PK')
        return $this->hasOne(Perfil::class, 'usuario_id', 'id');
    }

    public function posts()
    {
        // hasMany(Clase, 'FK', 'local_PK')
        return $this->hasMany(Post::class, 'usuario_id', 'id');
    }

}

