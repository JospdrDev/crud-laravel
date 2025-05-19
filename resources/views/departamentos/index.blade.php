@extends('layout')

@section('title', 'Departamentos')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Departamentos</h3>
    <a href="{{ route('departamentos.create') }}" class="btn btn-dark">Nuevo Departamento</a>
</div>

<table class="table table-hover">
    <thead class="table-light">
        <tr>
            <th>Nombre</th>
            <th>Ubicación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($departamentos as $departamento)
        <tr>
            <td>{{ $departamento->nombre }}</td>
            <td>{{ $departamento->ubicacion }}</td>
            <td>
                <a href="{{ route('departamentos.edit', $departamento) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                <form action="{{ route('departamentos.destroy', $departamento) }}" method="POST" style="display:inline;">
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
