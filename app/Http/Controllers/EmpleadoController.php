<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Departamento;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    

public function index()
    {
        $empleados = Empleado::with('departamento')->get();
        return view('empleados.index', compact('empleados'));
    }

    public function create()
    {
        $departamentos = Departamento::all();
        return view('empleados.create', compact('departamentos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:empleados',
            'dni' => 'required|unique:empleados',
            'departamento_id' => 'required|exists:departamentos,id',
        ]);

        Empleado::create($request->all());
        return redirect()->route('empleados.index')->with('success', 'Empleado creado.');
    }

    public function edit(Empleado $empleado)
    {
        $departamentos = Departamento::all();
        return view('empleados.edit', compact('empleado', 'departamentos'));
    }

    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:empleados,email,' . $empleado->id,
            'dni' => 'required|unique:empleados,dni,' . $empleado->id,
            'departamento_id' => 'required|exists:departamentos,id',
        ]);

        $empleado->update($request->all());
        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado.');
    }

    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado.');
    }


}
