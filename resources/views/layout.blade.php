<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Gestión de Empleados')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #f8f9fa, #dee2e6);
            color: #343a40;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background-color: #6c757d !important;
        }
        .nav-link, .navbar-brand {
            color: #fff !important;
        }
        .card {
            border: none;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 12px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Inicio</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('departamentos.index') }}">Departamentos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('empleados.index') }}">Empleados</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mb-5">
        @yield('content')
    </div>
    <footer class="text-center text-muted py-3">
        © {{ date('Y') }} Gestión Oficina
    </footer>
</body>
</html>
