<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    // ¡Esto es lo que hace falta!
    protected $fillable = ['usuario_id', 'titulo', 'contenido'];

    // Relación N:1 con Alumno
    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'usuario_id', 'id');
    }
}
