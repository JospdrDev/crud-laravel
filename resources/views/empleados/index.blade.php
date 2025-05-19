@extends('layout')

@section('title', 'Empleados')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Empleados</h3>
    <a href="{{ route('empleados.create') }}" class="btn btn-dark">Nuevo Empleado</a>
</div>

<table class="table table-hover">
    <thead class="table-light">
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>DNI</th>
            <th>Departamento</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->email }}</td>
            <td>{{ $empleado->dni }}</td>
            <td>{{ $empleado->departamento->nombre }}</td>
            <td>
                <a href="{{ route('empleados.edit', $empleado) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                <form action="{{ route('empleados.destroy', $empleado) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('home') }}" class="btn btn-link mt-3">← Volver al Inicio</a>
@endsection
