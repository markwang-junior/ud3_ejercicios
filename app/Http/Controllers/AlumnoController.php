<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // 1. GET /api/alumnos
    public function index()
    {
        // Devuelve todos los alumnos
        return Alumno::all();
    }

    // 2. GET /api/alumnos/{id}
    public function show($id)
    {
        return Alumno::findOrFail($id);
    }

    // 3. POST /api/alumnos
    public function store(Request $request)
    {
        // Validación básica (opcional, para mejorar)
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email'
        ]);

        // Crear alumno
        $alumno = new Alumno();
        $alumno->nombre = $request->nombre;
        $alumno->email = $request->email;
        $alumno->save();

        return response()->json($alumno, 201); // 201 Created
    }

    // 4. PUT /api/alumnos/{id}
    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->nombre = $request->nombre;
        $alumno->email = $request->email;
        $alumno->save();

        return response()->json($alumno, 200);
    }

    // 5. DELETE /api/alumnos/{id}
    public function destroy($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();

        return response()->json(null, 204); // 204 No Content
    }
}
