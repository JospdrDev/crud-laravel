<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    
public function index()
    {
        $departamentos = Departamento::all();
        return view('departamentos.index', compact('departamentos'));
    }



 public function create()
    {
        return view('departamentos.create');
    }



public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'ubicacion' => 'required',
        ]);

        Departamento::create($request->all());
        return redirect()->route('departamentos.index')->with('success', 'Departamento creado.');
    }



public function edit(Departamento $departamento)
    {
        return view('departamentos.edit', compact('departamento'));
    }

    public function update(Request $request, Departamento $departamento)
    {
        $request->validate([
            'nombre' => 'required',
            'ubicacion' => 'required',
        ]);

        $departamento->update($request->all());
        return redirect()->route('departamentos.index')->with('success', 'Departamento actualizado.');
    }

    public function destroy(Departamento $departamento)
    {
        $departamento->delete();
        return redirect()->route('departamentos.index')->with('success', 'Departamento eliminado.');
    }





}
