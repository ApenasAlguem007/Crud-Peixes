<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AquaFlow - Gerenciamento de Peixes</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    <nav class="navbar">
        <a href="{{ url('/') }}" class="logo">🌊 AquaFlow</a>
        <div class="nav-links" style="display: flex; gap: 1rem; align-items: center;">
            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm">Painel</a>
            @else
                <a href="{{ route('login') }}" style="color: white; text-decoration: none; padding: 0.4rem 0.8rem; font-size: 0.95rem;">Entrar</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Registar</a>
                @endif
            @endauth
        </div>
    </nav>

    <div class="container" style="margin-top: 3rem; text-align: center;">
        <div class="card" style="padding: 3rem 2rem; max-width: 800px; margin: 0 auto;">
            
            <span class="badge" style="margin-bottom: 1rem; display: inline-block;">
                Fish Manager System
            </span>
            
            <h1 style="font-size: 2.25rem; color: var(--primary-dark); margin-bottom: 1rem;">
                Controlo Inteligente de Espécies
            </h1>
            
            <p style="color: #64748B; font-size: 1.05rem; margin-bottom: 2rem; line-height: 1.6;">
                Plataforma desenvolvida para o cadastro, categorização e gerenciamento completo de peixes e seus habitats naturais de forma simples, rápida e organizada.
            </p>

            <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                @auth
                    <a href="{{ route('fish.index') }}" class="btn btn-primary">Gerenciar Peixes</a>
                    <a href="{{ route('types.index') }}" class="btn" style="background-color: #DDD6FE; color: var(--primary-dark);">Gerir Tipos</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary" style="padding: 0.75rem 2rem;">Entrar no Sistema</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn" style="background-color: #DDD6FE; color: var(--primary-dark); padding: 0.75rem 2rem;">Criar Nova Conta</a>
                    @endif
                @endauth
            </div>

        </div>

        <!-- Seção de Cards Dinâmicos com os Peixes Cadastrados -->
        @if(isset($fishes) && $fishes->count() > 0)
        <div style="margin: 4px auto 2rem auto; max-width: 900px; text-align: left;">
            <h2 style="font-size: 1.5rem; color: var(--primary-dark); margin-bottom: 1.5rem; text-align: center;">Espécies em Destaque no Sistema</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.25rem;">
                @foreach($fishes as $fish)
                <div class="card" style="padding: 1.25rem; background: white; border-radius: 12px; border: 1px solid var(--border); box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                        <span class="badge">{{ $fish->type->name ?? 'Geral' }}</span>
                        <span style="font-size: 0.8rem; color: #64748B;">#{{ $fish->id }}</span>
                    </div>
                    <h3 style="color: var(--primary-dark); font-size: 1.15rem; margin-bottom: 0.25rem; font-weight: bold;">{{ $fish->name }}</h3>
                    <p style="color: #64748B; font-size: 0.9rem;">Cor: <strong>{{ $fish->color }}</strong></p>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>

    <footer class="footer">
        <p>&copy; 2026 AquaFlow - Sistema de Gerenciamento de Peixes. Todos os direitos reservados.</p>
    </footer>

</body>
</html>