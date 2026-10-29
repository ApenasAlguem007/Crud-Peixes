@extends('layouts.app')

@section('content')
<div style="display: flex; flex-direction: column; gap: 2.5rem;">
    
    <!-- Hero Section / Boas-vindas -->
    <div class="card" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%); color: white; padding: 3rem 2rem; text-align: center; border-radius: 16px; border: none;">
        <span style="background: rgba(255,255,255,0.2); padding: 0.4rem 1rem; border-radius: 50px; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">
            Painel Principal • AquaFlow
        </span>
        <h1 style="color: white; font-size: 2.25rem; margin-top: 1rem; margin-bottom: 0.75rem;">
            Bem-vindo(a), {{ Auth::user()->name }}! 🌊
        </h1>
        <p style="color: #DDD6FE; font-size: 1.1rem; max-width: 650px; margin: 0 auto 2rem auto; line-height: 1.6;">
            O **AquaFlow** é a sua plataforma inteligente para cadastro, controle e categorização de espécies de peixes de rios e mares de forma prática, elegante e totalmente organizada.
        </p>
        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
            <a href="{{ route('fish.index') }}" class="btn" style="background-color: white; color: var(--primary); font-weight: bold;">
                Gerenciar Peixes
            </a>
            <a href="{{ route('types.index') }}" class="btn" style="background-color: rgba(255,255,255,0.15); color: white; border: 1px solid rgba(255,255,255,0.3);">
                Ver Tipos de Ambientes
            </a>
        </div>
    </div>

    <!-- Seção de Apresentação e Cards Informativos com Imagens -->
    <div>
        <h2 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--primary-dark);">Explore Nossas Funcionalidades e Espécies</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
            
            <!-- Card 1: Peixes de Rio -->
            <div class="card" style="overflow: hidden; padding: 0; display: flex; flex-direction: column;">
                <div style="height: 160px; background-image: url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=600&q=80'); background-size: cover; background-position: center;"></div>
                <div style="padding: 1.5rem; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <h3 style="color: var(--primary-dark); margin-bottom: 0.5rem; font-size: 1.25rem;">Ambiente de Rio</h3>
                        <p style="color: #64748B; font-size: 0.95rem; margin-bottom: 1.5rem;">
                            Cadastre e gerencie espécies de água doce como Tilápia, Pacu, Pintado e Tucunaré com facilidade e precisão.
                        </p>
                    </div>
                    <a href="{{ route('fish.index') }}" class="btn btn-primary btn-sm" style="text-align: center;">Ver Peixes de Rio</a>
                </div>
            </div>

            <!-- Card 2: Peixes de Mar -->
            <div class="card" style="overflow: hidden; padding: 0; display: flex; flex-direction: column;">
                <div style="height: 160px; background-image: url('https://images.unsplash.com/photo-1522069169874-c58ec4b76be5?auto=format&fit=crop&w=600&q=80'); background-size: cover; background-position: center;"></div>
                <div style="padding: 1.5rem; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <h3 style="color: var(--primary-dark); margin-bottom: 0.5rem; font-size: 1.25rem;">Ambiente de Mar</h3>
                        <p style="color: #64748B; font-size: 0.95rem; margin-bottom: 1.5rem;">
                            Controle espécies marinhas fascinantes como Sardinha, Atum, Peixe-palhaço e Robalo em seu ecossistema.
                        </p>
                    </div>
                    <a href="{{ route('fish.index') }}" class="btn btn-primary btn-sm" style="text-align: center;">Ver Peixes de Mar</a>
                </div>
            </div>

            <!-- Card 3: Gestão Completa -->
            <div class="card" style="overflow: hidden; padding: 0; display: flex; flex-direction: column;">
                <div style="height: 160px; background-image: url('https://images.unsplash.com/photo-1534043464591-3e9071299654?auto=format&fit=crop&w=600&q=80'); background-size: cover; background-position: center;"></div>
                <div style="padding: 1.5rem; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <h3 style="color: var(--primary-dark); margin-bottom: 0.5rem; font-size: 1.25rem;">Gestão Dinâmica</h3>
                        <p style="color: #64748B; font-size: 0.95rem; margin-bottom: 1.5rem;">
                            Adicione novos tipos de habitats e gerencie atributos como cores, nomes e relacionamentos via Eloquent.
                        </p>
                    </div>
                    <a href="{{ route('types.index') }}" class="btn btn-primary btn-sm" style="text-align: center;">Gerenciar Tipos</a>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection