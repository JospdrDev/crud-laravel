@extends('layout')

@section('title', 'Crear Departamento')

@section('content')
<h3>{{ isset($departamento) ? 'Editar' : 'Nuevo' }} Departamento</h3>

<form action="{{ isset($departamento) ? route('departamentos.update', $departamento) : route('departamentos.store') }}" method="POST">
    @csrf
    @if (isset($departamento)) @method('PUT') @endif

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $departamento->nombre ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label>Ubicación</label>
        <input type="text" name="ubicacion" class="form-control" value="{{ old('ubicacion', $departamento->ubicacion ?? '') }}" required>
    </div>

    <button class="btn btn-dark">{{ isset($departamento) ? 'Actualizar' : 'Crear' }}</button>
    <a href="{{ route('departamentos.index') }}" class="btn btn-link">← Volver</a>
</form>
@endsection
