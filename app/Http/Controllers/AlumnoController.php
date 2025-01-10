<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // GET /api/alumnos
    public function index()
    {
        return Alumno::all();
    }

    // GET /api/alumnos/{id}
    public function show($id)
    {
        return Alumno::findOrFail($id);
    }

    // POST /api/alumnos
    public function store(Request $request)
    {
        // Opción: $alumno = new Alumno(); y luego $alumno->save();
        // O la opción create() si definiste $fillable en el modelo
        $alumno = Alumno::create([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email')
        ]);

        return response()->json($alumno, 201);
    }

    // PUT /api/alumnos/{id}
    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->update($request->all());

        return response()->json($alumno, 200);
    }

    // DELETE /api/alumnos/{id}
    public function destroy($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();

        return response()->json(null, 204);
    }
}

