<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AquaFlow - Gerenciamento de Peixes</title>
    <!-- CSS Próprio -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    <nav class="navbar">
        <a href="{{ url('/') }}" class="logo">🌊 AquaFlow</a>
        <div class="nav-links">
            <a href="{{ route('fish.index') }}">Peixes</a>
            <a href="{{ route('types.index') }}">Tipos</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm" style="background: transparent; border: 1px solid rgba(255,255,255,0.4);">Sair</button>
            </form>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
        <p>&copy; 2026 AquaFlow - Sistema de Gerenciamento de Peixes. Todos os direitos reservados.</p>
    </footer>

</body>
</html>