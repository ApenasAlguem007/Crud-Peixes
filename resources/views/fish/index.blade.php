@extends('layouts.app')

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h2>Lista de Peixes</h2>
        <a href="{{ route('fish.create') }}" class="btn btn-primary">+ Novo Peixe</a>
    </div>

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cor</th>
                <th>Tipo</th>
                <th style="text-align: right;">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fishes as $fish)
            <tr>
                <td>#{{ $fish->id }}</td>
                <td><strong>{{ $fish->name }}</strong></td>
                <td>{{ $fish->color }}</td>
                <td><span class="badge">{{ $fish->type->name }}</span></td>
                <td style="text-align: right;">
                    <a href="{{ route('fish.edit', $fish->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ route('fish.destroy', $fish->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Deseja excluir este registro?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection