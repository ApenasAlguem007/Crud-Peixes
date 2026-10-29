@extends('layouts.app')

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h2>Tipos de Ambientes</h2>
        <a href="{{ route('types.create') }}" class="btn btn-primary">+ Novo Tipo</a>
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
                <th style="text-align: right;">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($types as $type)
            <tr>
                <td>#{{ $type->id }}</td>
                <td><strong>{{ $type->name }}</strong></td>
                <td style="text-align: right;">
                    <a href="{{ route('types.edit', $type->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ route('types.destroy', $type->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Deseja excluir este tipo?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection