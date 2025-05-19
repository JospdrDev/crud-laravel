@extends('layout')

@section('title', 'Crear Empleado')

@section('content')
<h3>{{ isset($empleado) ? 'Editar' : 'Nuevo' }} Empleado</h3>

<form action="{{ isset($empleado) ? route('empleados.update', $empleado) : route('empleados.store') }}" method="POST">
    @csrf
    @if (isset($empleado)) @method('PUT') @endif

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $empleado->nombre ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $empleado->email ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label>DNI</label>
        <input type="text" name="dni" class="form-control" value="{{ old('dni', $empleado->dni ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label>Departamento</label>
        <select name="departamento_id" class="form-control" required>
            <option value="">Seleccionar...</option>
            @foreach ($departamentos as $departamento)
                <option value="{{ $departamento->id }}" @selected(old('departamento_id', $empleado->departamento_id ?? '') == $departamento->id)>
                    {{ $departamento->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-dark">{{ isset($empleado) ? 'Actualizar' : 'Crear' }}</button>
    <a href="{{ route('empleados.index') }}" class="btn btn-link">← Volver</a>
</form>
@endsection
