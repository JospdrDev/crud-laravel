<!-- resources/views/home.blade.php -->
@extends('layout')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-6 mb-4">
        <div class="card p-4 text-center">
            <h5 class="mb-3">Departamentos</h5>
            <p class="text-muted">Gestión de áreas y ubicaciones.</p>
            <a href="{{ route('departamentos.index') }}" class="btn btn-outline-dark">Ver Departamentos</a>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card p-4 text-center">
            <h5 class="mb-3">Empleados</h5>
            <p class="text-muted">Listado completo de empleados registrados.</p>
            <a href="{{ route('empleados.index') }}" class="btn btn-outline-dark">Ver Empleados</a>
        </div>
    </div>
</div>
@endsection
